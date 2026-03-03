const LASTFM_API_KEY = 'e00692134aefc1abf2643ef7b90fc8ce'; // i know. but please dont
const LASTFM_USER = 'cowshu';
async function fetchNowPlaying() {
    const url = `https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=${LASTFM_USER}&api_key=${LASTFM_API_KEY}&format=json&limit=1`;
    try {
        const response = await fetch(url);
        const data = await response.json();
        const track = Array.isArray(data.recenttracks.track)
        ? data.recenttracks.track[0]
        : data.recenttracks.track;

        const isNowPlaying = track['@attr']?.nowplaying === 'true';
        document.getElementById('playingStatus').textContent = isNowPlaying ? ' | now listening:' : ' | last played:';

        const trackName = track.name || 'idk lol';
        const artistName = track.artist['#text'] || track.artist.name || 'idk lol';
        const albumName = track.album['#text'] || 'idk lol';
        const trackUrl = track.url || '#';
        const albumArt = track.image.find(img => img.size === 'large')['#text'] || 'placeholder.jpg';
        document.getElementById('track').textContent = trackName;
        document.getElementById('artist').textContent = artistName;
        document.getElementById('album').textContent = albumName;
        document.getElementById('albumArt').src = albumArt;
        document.getElementById('trackUrl').href = trackUrl;
    } catch (error) {
        console.error('could not fetch :(', error);
        document.getElementById('track').textContent = 'error loading track';
    }
}
setInterval(fetchNowPlaying, 10000);
fetchNowPlaying();
