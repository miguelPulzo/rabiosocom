<html>
    <head>
        <title>Rabioso.com</title>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/functions.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href='//fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

<header>
Rabioso.com
</header>

<div class="sidebar-left"></div>
<div class="container">
    <div class="cuerpo">
        <div class='msg_top'>
            <span class="perro">Cansad@ de que te traten como a un' perr@?</span> .. pues  suelta tus palabras publicandolas aqui diciendo de forma anonima lo que crees, piensas y quieeeeeras de cualquier Persona, Escuela, Colegio, Universidad, Empresa, etc!!<br /><br />
            No te preocupes porque no diremos que lo escribiste tu! ../ Realmente no estamos interesados en saber tu nombre.. Solo estamos interesados en que lo sueltes para que el mundo se entere.<br /><br />
            No es nuestra responsabilidad lo que se publique aqui.
        </div>
        <div class="right">
            <div id="postit" onclick="sendMessage();">Soltar</div>
        </div>
        <div class="right">
            <!-- <input name="expresate" id="expresate" type="text" value=""> -->
            <textarea style="border: 1px solid red; border-radius:5px; padding: 5px;" name="expresate" id="expresate" onclick="setEmpty(this)" onkeyup="countChar(this)" placeholder="Expresate sin tapujos aqui!"></textarea>
            <div id="charNum">200 Characters</div>
        </div>
        <div class="right">
            <div id="all_messages" class="all_messages"></div>
            <div id="errorMessage"></div>
        </div>
    </div>
</div>
<div class="sidebar-right"></div>

<footer>
Rabioso.com - Una idea de la Gente y para la Gente
</footer>

</body>
</html>
