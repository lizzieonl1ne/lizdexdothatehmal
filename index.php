<!DOCTYPE html>
<html lang=en-us>
<head>
  <title>hi! hello!!!! hi!!!!</title>
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <link href="style.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width">
</head>
<body>

<!--
Source - https://stackoverflow.com/a
Posted by rmurph46, modified by community. See post 'Timeline' for change history
Retrieved 2026-01-27, License - CC BY-SA 3.0
-->
<main>
<div class="ticker-wrap">
    <p class="marquee">
        <span>Now on Caddy (also PHP!) | lets all love lain!!! | kinda deals that make you wanna boogie | hello from the abyss! (written while internet dead) | <a href="https://yukisite.xyz">Hi Yuki</a> | build more personal sites | YAHARR THERE BE TREASURE | shuake forever and no one can tell me otherwise | hey Miku whats the best Pixar movie? | <img src="https://c.tenor.com/GeG1vVt8j24AAAAC/tenor.gif"> | <img src="resize.gif"> | what you know about rollin down in the deep | is the now listening widget broken again? | we STEAM. STEAMAPPS. COMMON. | Now enhanced with Microsoft 365 Copilot AI | free to do whatever just chillin in my bed | Ditch Spotify <a href="https://bandcamp.com/">Purchase FLACs</a> | fuck ICE | double fuck israel | bad css is my passion | now with even MORE blackjack and hookers | hello everynyan, how are you? fine? thank you | OH MY GAH | <img src=https://media.tenor.com/UrpR4peo_MMAAAAi/jackenstein-deltarune.gif> | what is this teto pear doin on the calculator is blud einstein | <img src="https://c.tenor.com/OIgJFl2i4j4AAAAd/tenor.gif"> | oh theres the loop here comes the bigass gap&nbsp;</span> <!--if youre wondering, like half of these are inside jokes-->
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
        <div style="margin-top: 15px"><a href="https://github.com/lizzieonl1ne/lizdexdothatehmal">site source code</a> - <a href="https://wetdry.world/@leexyz">wetdry.world</a> - <a href="https://steamcommunity.com/id/leeisonline/">steam</a> - <a href="https://github.com/lizzieonl1ne">github</a> - <a href="https://bandcamp.com/lizzieonl1ne">bandcamp collection</a></div>

        <p>Discord: <strong>@lizzieonl1ne</strong>
        <br>Matrix: <strong>@lizzieonl1ne:matrix.org</strong>

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

<!--<div class="sched"> under construction!
    <fieldset>
    <legend>schedule</legend>
        <p>hai im unavailable at these times:
        <b>
    </fieldset>
</div>-->
<legend id="playingStatus">the music widget machine broke</legend>
<div class="music">
    <fieldset style="display: flex; align-items: center; gap: 15px;">
        <img src="placeholder.jpg" alt="album art" id="albumArt" class="album-art">
        <div class="song-info">
            <p><strong>track |</strong> <span id="track">idk lol</span></p>
            <p><strong>artist |</strong> <span id="artist">idk lol</span></p>
            <p><strong>album |</strong> <span id="album">idk lol</span></p>
            <p><a href="#" target="_blank" id="trackUrl">go to song ></a></p>
        </div>
    </fieldset>
</div>

</main>

<script src="lastfm.js"></script>
<script src="oneko.js" class="oneko"></script>
</body>
</html>
