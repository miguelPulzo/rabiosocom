<?php
    include('controller/control.php');
    $con = new Control();

    $con->connect();
    $data = $con->getAllMessages();
    $con->close();

    foreach( $data AS $item ){
        $classname = 'impar';
        if( $item['id'] % 2 == 0 )
            $classname = 'par';
        echo '<div class="message '.$classname.'">' . $item['message'] . '</div>';
        //echo '<div class="message">' . $item['message'] . '</div>';
    }
