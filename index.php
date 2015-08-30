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
    </head>
<body>

<header><?=$siteName?></header>

<div class="sidebar-left"></div>
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
<div class="sidebar-right"></div>
<!--
<footer><?=$siteName?> - Una idea de la Gente y para la Gente</footer>
-->
</body>
</html>
