const LB_USER = 'lizzieonl1ne';
const LB_BASE = 'https://api.listenbrainz.org/1/user';
const CAA_BASE = 'https://coverartarchive.org/release';

async function resolveAlbumArt(track) {
    let releaseMbid =
    track.mbid_mapping?.caa_release_mbid ||
    track.mbid_mapping?.release_mbid     ||
    track.additional_info?.release_mbid  ||
    null;

    if (!releaseMbid) {
        const params = new URLSearchParams({
            recording_name: track.track_name  || '',
            artist_name:    track.artist_name || '',
            metadata:       'true',
            incs:           'release'
        });

        const res  = await fetch(`https://api.listenbrainz.org/1/metadata/lookup/?${params}`, {
            headers: { 'Authorization': 'Token bd4c09bd-ad8b-4669-a9b4-1ddd4c85665e' } //https://i.kym-cdn.com/entries/icons/facebook/000/026/380/lock.jpg
        });
        const data = await res.json();

        releaseMbid =
        data?.mbid_mapping?.caa_release_mbid ||
        data?.mbid_mapping?.release_mbid     ||
        data?.release_mbid                   ||
        null;
    }

    if (!releaseMbid) return null;

    const caaRes  = await fetch(`${CAA_BASE}/${releaseMbid}/`);
    const caaData = await caaRes.json();

    const front = caaData?.images?.find(img => img.front === true && img.approved === true);
    return front?.thumbnails?.['500'] || front?.thumbnails?.large || null;
}

async function fetchNowPlaying() {
    try {
        let isNowPlaying = false;
        let track = null;

        const nowRes  = await fetch(`${LB_BASE}/${LB_USER}/playing-now`);
        const nowData = await nowRes.json();

        if (nowData.payload?.listens?.length > 0) {
            track = nowData.payload.listens[0].track_metadata;
            isNowPlaying = true;
        } else {
            const recentRes  = await fetch(`${LB_BASE}/${LB_USER}/listens?count=1`);
            const recentData = await recentRes.json();
            track = recentData.payload?.listens?.[0]?.track_metadata ?? null;
        }

        if (!track) throw new Error('no track data found');

        document.getElementById('playingStatus').textContent =
        isNowPlaying ? '󰐊 | actively listening:' : '󰏤 | last played:';
        document.getElementById('track').textContent  = track.track_name   || 'idk lol';
        document.getElementById('artist').textContent = track.artist_name  || 'idk lol';
        document.getElementById('album').textContent  = track.release_name || 'idk lol';
        document.getElementById('trackUrl').href = `https://listenbrainz.org/user/${LB_USER}/`;

        const artEl  = document.getElementById('albumArt');
        const artUrl = await resolveAlbumArt(track);
        if (artUrl) {
            artEl.onerror = () => { artEl.onerror = null; artEl.src = 'placeholder.jpg'; };
            artEl.src = artUrl;
        } else {
            artEl.src = 'placeholder.jpg';
        }

    } catch (error) {
        document.getElementById('track').textContent = 'error loading track';
    }
}

setInterval(fetchNowPlaying, 10000);
fetchNowPlaying();
