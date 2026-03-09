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
        <span>Now on Caddy (also PHP!) | lets all love lain!!! | kinda deals that make you wanna boogie | hello from the abyss! (written while internet dead) | <a href="https://yukisite.xyz">Hi Yuki</a> | build more personal sites | YAHARR THERE BE TREASURE | shuake forever and no one can tell me otherwise | hey Miku whats the best Pixar movie? | <img src="https://c.tenor.com/GeG1vVt8j24AAAAC/tenor.gif"> | <img src="resize.gif"> | what you know about rollin down in the deep | <img src="https://archlinux.org/static/logos/archlinux-logo-white-1200dpi.png"> btw | music widget now pulling listenbrainz! | we STEAM. STEAMAPPS. COMMON. | Now enhanced with Microsoft 365 Copilot AI | free to do whatever just chillin in my bed | Ditch Spotify <a href="https://bandcamp.com/">Purchase FLACs</a> | fuck ICE | double fuck israel | bad css is my passion | now with even MORE blackjack and hookers | hello everynyan, how are you? fine? thank you | OH MY GAH | <img src=https://media.tenor.com/UrpR4peo_MMAAAAi/jackenstein-deltarune.gif> | what is this teto pear doin on the calculator is blud einstein | <img src="https://c.tenor.com/OIgJFl2i4j4AAAAd/tenor.gif"> | oh theres the loop here comes the bigass gap&nbsp;</span> <!--if youre wondering, like half of these are inside jokes-->
    </p>
<!--    <p class="marquee marquee2">
        <span>placeholder&nbsp;</span>
    </p>-->
</div>
<div class="header">
    <fieldset>
        <h2 style="margin-bottom: 0;">ashe's web home</h2>
        <?php
        $counter_file = 'hits.txt';

        if (!file_exists($counter_file)) {
            file_put_contents($counter_file, '0');
        }

        $hits = (int)file_get_contents($counter_file);
        $hits++;
        file_put_contents($counter_file, $hits);

        echo "<small>$hits total views</small>";
        ?>
        <div style="margin-top: 15px">
        <a href="https://github.com/lizzieonl1ne/lizdexdothatehmal">site source code</a> - <a href="https://wetdry.world/@leexyz">wetdry.world</a>
        - <a href="https://steamcommunity.com/id/leeisonline/">steam</a>
        - <a href="https://github.com/lizzieonl1ne">github</a>
        - <a href="https://bandcamp.com/lizzieonl1ne">bandcamp collection</a></div>

        <p>Discord: <strong>@lizzieonl1ne</strong>
        <br>Matrix: <strong>@lizzieonl1ne:catgirl.cloud</strong>

<script>
setInterval(() => {
  document.getElementById('time').textContent = new Date().toLocaleString('en-US', { timeZone: 'America/Chicago', hour: 'numeric', minute: '2-digit', second: '2-digit', hour12: true });
}, 1000);
</script>
    </fieldset>

</div>

<div class="infobox">
      <fieldset>
            <ul style="list-style: none; padding-left: 0;">
                <li><b>name(s):</b> ashe/liz/lizzie</li>
                <li><b>age:</b> 19</li>
                <li><b>pronouns:</b> she/they/it</li>
                <li><b>gender:</b> fluid (enby/fem)</li>
                <li><b>sexuality:</b> pansexual</li>
                <!--<li><b><img src="https://www.prideflags.org/static/search/data/img/genderfluid_pride_flag.svg"> <img src="https://www.prideflags.org/static/search/data/img/transgender_pride_flag.svg"> <img src="https://www.prideflags.org/static/search/data/img/pansexual_pride_flag.svg"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Tux.svg/330px-Tux.svg.png">-->
            </ul>

            <ul style="list-style: none; padding-left: 0;">
                <li><b>interests:</b> general technology, y2k, linux, open source, selfhosting</li>
                <li><b>you should know:</b> i have autism, adhd, (social) anxiety, and depression</li>
            </ul>
            <small>local time: <span id="time"></span>
            <br>(US Central, UTC-06:00)</small>
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
