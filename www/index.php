<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '-head.php'; ?>
</head>

<body class="p-1">
    <div class="container-48">
        <div class="grid gap-1">
            <?php include '-header.php'; ?>
            <div class="card invert p-0-25">
                <iframe class="w-all aspect-video" src="https://www.youtube-nocookie.com/embed/nY4ywCfJ_sI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="card p-3">
                <p>As a <a href="https://vlad.studio/resume" class="_ c-accent" target="_blank">web designer &amp; developer</a>, I need to constantly check my designs on large and small screens. I tried many browser extensions that help you test responsive designs, but most of them were too bloated or inconvenient. So I created my own &ndash; simple and opinionated. </p>
                <p>I've been using it daily, so I thought &ndash; why not publish it, maybe it will be useful for you too!</p>

                <hr>

                <p class="c-accent t-semibold"> 3 Phones, 3 Tables </P>
                <p>Most extensions require that I configure my own list of devices to simulate. Responsive Buddy only offers 3 phone and 3 tablet sizes, from small to large.</p>

                <hr>

                <p class="c-accent t-semibold"> Zoom Out (100 To 70%) </P>
                <p>Useful if you want to compensate the difference between your monitod DPI (pixel density) and the DPI of a target mobile device.</p>

                <hr>

                <p class="c-accent t-semibold"> Portrait / Landscape </P>
                <p>Switch between portrait and landscape orientation with a click of a button.</p>

                <hr>

                <p class="c-accent t-semibold"> Dark Mode Support </P>
                <p>Your eyes will thank you!</p>

                <hr>

                <p class="c-accent t-semibold"> Iframe Mode Off Button </P>
                <p>By default, Responsive Buddy creates a window with an iframe, then transforms it to the selected zoom setting. It works well, unless your website refuses to be opened in an iframe. If that's the case, you can turn iframe mode off. See details below:</p>
            </div>
            <div class="card w-all">
                <table class="b-card w-all">
                    <tbody>
                        <tr>
                            <th class="p-1" width="50%">
                                <div class="flex a-center">
                                    <img src="/images/iframe-1.svg" alt="iframe mode on" class="i-1-5">
                                    <div class="">iframe mode on</div>
                                </div>
                            </th>
                            <th class="p-1" width="50%">
                                <div class="flex a-center">
                                    <img src="/images/iframe-0.svg" alt="iframe mode off" class="i-1-5">
                                    <div class="">iframe mode off</div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td class="p-1">will not work if a web page refuses to load in an iframe </td>
                            <td class="p-1">works with all web pages</td>
                        </tr>
                        <tr>
                            <td class="p-1">cannot be reloaded with Ctrl–R <span class="c-light">(but you can right-click and "Reload frame")</span></td>
                            <td class="p-1">can be reloaded</td>
                        </tr>
                        <tr>
                            <td class="p-1">keeps zoom setting if you click away</td>
                            <td class="p-1">zoom setting is reset if you click away <span class="c-light">(due to limitation of zoom API)</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card p-0-5"><img src="/images/screenshot-1.jpg" alt=Screenshot"></div>
            <div class="card p-0-5"><img src="/images/screenshot-2.jpg" alt=Screenshot"></div>
            <div class="card p-0-5"><img src="/images/screenshot-3.jpg" alt=Screenshot"></div>
            <?php include '-footer.php'; ?>
        </div>
    </div>

</body>

</html>