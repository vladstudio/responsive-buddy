<!DOCTYPE html>
<html lang="en" class="bg-cover">

<head>
    <meta charset="utf-8" />
    <title>Responsive Buddy</title>
    <meta name="description" content="Test mobile layouts of your web pages in 2 clicks." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta property="og:title" content="<?= $page['title'] ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_GB">
    <meta property="og:site_name" content="Vlad.studio">
    <meta property="og:description" content="Vladstudio is the project of digital artist Vlad Gerasimov. Since 1998, I've created 500+ digital art pieces, available as desktop wallpapers, digital e-cards, online puzzles, facebook covers, and more.">
    <meta property="og:url" content="https://responsive-buddy.vlad.studio">
    <meta property="og:image" content="/images/promo-large.png">
    <meta name="twitter:card" content="/images/promo-large.png">
    <meta name="twitter:image" content="/images/promo-large.png">

    <link rel="manifest" href="/manifest.webmanifest">
    <link rel="icon" href="/favicon/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon/1024.png" type="image/png">
    <link rel="apple-touch-icon" href="/favicon/256.png">

    <link rel="stylesheet" href="css/skin-buddy.css" />
    <link rel="stylesheet" href="css/square-one.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cash/8.1.1/cash.min.js"></script>

    <style>
        @font-face {
            font-family: 'Circe';
            src: url('/fonts/circe/circe-regular.woff2') format('woff2'), url('/fonts/circe/circe-regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'Circe';
            src: url('/fonts/circe/circe-bold.woff2') format('woff2'), url('/fonts/circe/circe-bold.woff') format('woff');
            font-weight: bold;
            font-style: normal;
        }

        #hangingChrome {
            position: fixed;
            display: block;
            top: 1rem;
            right: 1rem;
            width: 248px;
            height: 75px;
            background: #fff url('/images/hangingChrome.png') no-repeat center center;
            background-size: 248px 75px;
            border-radius: 8px;
            overflow: hidden;
            text-indent: -9999px;
            box-shadow: 0 1px 2px rgba(139, 137, 135, 0.3), 0 5px 15px rgba(139, 137, 135, 0.2);
        }
    </style>
</head>

<body class="p-1">
    <div class="container-48">
        <div class="grid gap-1">
            <div class="card p-2 flex a-center j-center gap-2">
                <img src="/favicon/favicon.svg" alt="Logo" width="128" height="128">
                <h1 class="c-accent">Responsive Buddy</h1>
            </div>
            <div class="card invert p-0-25">
                <iframe class="w-all aspect-video" src="https://www.youtube-nocookie.com/embed/nY4ywCfJ_sI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="card p-3">
                <p>As a web developer, I need to constantly check my designs on large and small screens. I tried many Chrome extensions that test responsive designs, but most of them were too bloated or inconvenient. So I created my own. I've been using it daily, so I thought – why not publish it, maybe it will be useful for you too!</p>

                <hr>

                <p class="c-accent t-semibold"> 3 Phones, 3 Tables </P>

                <p>Most extensions require that I configure my own list of favorite devices. Responsive Buddy offers 3 phone and 3 tablet sizes, from small to large.</p>

                <hr>

                <p class="c-accent t-semibold"> Zoom Out (100 To 70%) </P>

                <p>Useful if you want to compensate the difference between your monitod DPI (pixel density) and the DPI of a target mobile device.</p>

                <hr>

                <p class="c-accent t-semibold"> Portrait / Landscape </P>

                <p>Switch between portrait and landscape orientation with a click of a button.</p>

                <hr>

                <p class="c-accent t-semibold"> Iframe Mode Off Button </P>

                <p>By default, Responsive Buddy creates a window with an iframe, then transforms it to the selected zoom setting. It works well, unless your website refuses to be opened in an iframe. If that's the case, you can turn "iframe mode" off.</p>

                <hr>

                <p class="c-accent t-semibold"> Dark Mode Support </P>

                <p>Your eyes will thank you!</p>

            </div>
            <div class="card p-0-5"><img src="/images/screenshot-1.jpg" alt=Screenshot"></div>
            <div class="card p-0-5"><img src="/images/screenshot-2.jpg" alt=Screenshot"></div>
            <div class="card p-0-5"><img src="/images/screenshot-3.jpg" alt=Screenshot"></div>
        </div>
    </div>

    <a href="#" id="hangingChrome">Get the Chrome Extension</a>
</body>

</html>