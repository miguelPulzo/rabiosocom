<?php
    include('controller/control.php');

    //----------
    $a = array("'", '"');
    $b = array("\'", '\"');
    $_POST['data'] = str_replace($a,$b,$_POST['data']);
    //----------

    $con = new Control();

    $con->connect();
    $query = "INSERT INTO message(message, created) VALUES ('".$_POST['data']."', NOW())";
    $con->insert( $query );
    $con->close();

    $con->connect();
    $data = $con->getAllMessages();
    $con->close();

    if( !empty($data) ){
        foreach( $data AS $item ){
            $classname = 'impar';
            if( $item['id'] % 2 == 0 )
                $classname = 'par';
            echo '<div class="message '.$classname.' msg-'.md5($item['id']).'">' . $item['message'] . '</div>';
            //echo '<div class="message">' . $item['message'] . '</div>';
        }
    }
