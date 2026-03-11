<!DOCTYPE html>
<html lang=en-us>
<head>
  <title>hiding in your tablist</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <link href="style.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width">
</head>
<body>

<main>
<div class="ticker-wrap">
    <p class="marquee">
        <span><?php include 'ticker.php'; ?></span>
    </p>
</div>

<div class="header">
    <fieldset>
        <h2 style="margin-bottom: 0;">ashe's web home</h2>

        <?php include 'counter.php'; ?>
        <small><span class="hits"><?php echo $hits; ?></span> total views</small>

        <div style="margin-top: 15px">
        <pre>
 web-links/
├─ <a href="https://github.com/lizzieonl1ne/lizdexdothatehmal">󰌷 site source code</a>
├─ <a href="https://wetdry.world/@leexyz">󰌷 wetdry.world</a>
├─ <a href="https://steamcommunity.com/id/leeisonline/">󰌷 steam</a>
├─ <a href="https://github.com/lizzieonl1ne">󰌷 github</a>
├─ <a href="https://bandcamp.com/lizzieonl1ne">󰌷 bandcamp collection</a>
├─  discord/
│  └─<span onclick="navigator.clipboard.writeText('lizzieonl1ne')" class="copy"> 󰁥 lizzieonl1ne</span><!--<span onclick="navigator.clipboard.writeText('lizzieonl1ne')" style="cursor: pointer;">󰆏</span>  saving this kthxbye-->
└─  matrix/
   └─<span onclick="navigator.clipboard.writeText('lizzieonl1ne:catgirl.cloud')" class="copy"> 󰁥 lizzieonl1ne:catgirl.cloud</span>
        </pre>
        <small style="color:#FFFFFF77; font-size:0.7rem">click the usernames to copy to clipboard.</small>
        </div>
<script>
setInterval(() => {
  document.getElementById('time').textContent = new Date().toLocaleString('en-US', { timeZone: 'America/Chicago', hour: 'numeric', minute: '2-digit', second: '2-digit', hour12: true });
}, 1000);
</script>
    </fieldset>

</div>

<div class="infobox">
    <fieldset style="padding:10px;">
<pre>
 personal-info/
├─  name(s)/
│  ├─ ashe
│  ├─ lizzie
│  └─ liz
├─  pronouns/
│  ├─ she/her
│  ├─ they/them
│  └─ it/its
├─  age/
│  └─ 19
├─  gender/
│  └─  genderfluid/
│     └─ enby/fem
├─  sexuality/
│  └─ pansexual
├─  interests/
│  ├─ open source
│  ├─ linux
│  ├─ selfhosting
│  │  └─ hello from caddy
│  ├─ fucking with shit
│  ├─ yuri
│  │  └─ <a href="https://yukisite.xyz"> yuki</a>
│  └─ yaoi
├─  disabilities/
│  ├─ depression
│  ├─ (social) anxiety
│  ├─ adhd
│  └─ autism
│     └─ clearly
└─  local-time/
   ├─  <span id="time">loading</span>
   └─ (US Central, UTC-06:00)
</pre>
    </fieldset>
</div>

<legend id="playingStatus">widget broke. ill just predict it</legend>
<div class="music">
    <fieldset class="music-container">
        <img src="favicon.png" alt="album art" id="albumArt" class="album-art">

        <div class="song-info">
            <div class="meta-group">
                <small>track</small>
                <span id="track" class="music-seperator">BRISK</span>
            </div>

            <div class="meta-group">
                <small>artist</small>
                <span id="artist" class="music-seperator">yoda star war</span>
            </div>

            <div class="meta-group">
                <small>album</small>
                <span id="album" class="music-seperator">i have no idea</span>
            </div>
            <small><a href="#" target="_blank" id="trackUrl" style="margin-top: 100px;">go to song ></a></small>
        </div>
    </fieldset>
</div>

</main>

<script src="listenbrainz.js"></script>
<script src="oneko.js" class="oneko"></script>
</body>
</html>
