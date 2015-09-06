<?php $siteName = 'Hatelines.com'; ?>
<html>
    <head>
        <title><?=$siteName?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/ga.js"></script>

        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">

        <script type='text/javascript'>
            var googletag = googletag || {};
            googletag.cmd = googletag.cmd || [];
            (function() {
                var gads = document.createElement('script');
                gads.async = true;
                gads.type = 'text/javascript';
                var useSSL = 'https:' == document.location.protocol;
                gads.src = (useSSL ? 'https:' : 'http:') +
                    '//www.googletagservices.com/tag/js/gpt.js';
                var node = document.getElementsByTagName('script')[0];
                node.parentNode.insertBefore(gads, node);
            })();
        </script>
        <script type='text/javascript'>
            googletag.cmd.push(function() {
                googletag.defineSlot('/61457380/BLOCK300X600', [300, 600], 'div-gpt-ad-1440993552649-0').addService(googletag.pubads());
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
            });
        </script>
    </head>
<body>

<header><?=$siteName?></header>

<div class="sidebar-left">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- adSense300x600 -->
    <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:600px"
         data-ad-client="ca-pub-6079072908704264"
         data-ad-slot="6482607294"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
<div class="container">
    <div class="cuerpo">
        <div class='msg_top'>
            <span class="perro">Cansad@ de que te traten como a un' perr@?</span> .. y mas aun que te hagan <span class="perro">bullying?</span> Suelta tus palabras anonimamente aqui.<br /><br />
        </div>
        <div class="sendMessage">
            <div class="right">
                <!-- <input name="expresate" id="expresate" type="text" value=""> -->
                <textarea name="expresate" id="expresate" onclick="setEmpty(this)" onkeyup="countChar(this)" placeholder="Expresate sin tapujos aqui!" onkeypress="onTextAreaChange()"></textarea>
                <div id="charNum">200 Characters</div>
            </div>
            <div class="right">
                <div id="postit" onclick="sendMessage();">Soltar</div>
            </div>
        </div>
        <div>
            <div id="all_messages" class="all_messages"></div>
            <div id="errorMessage"></div>
        </div>
    </div>
</div>
<div class="sidebar-right">
    <!-- /61457380/BLOCK300X600 -->
    <div id='div-gpt-ad-1440993552649-0' style='height:600px; width:300px;'>
        <script type='text/javascript'>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1440993552649-0'); });
        </script>
    </div>
</div>
<!--
<footer><?=$siteName?> - Una idea de la Gente y para la Gente</footer>
-->
</body>
</html>
