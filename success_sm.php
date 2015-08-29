<?php
include('controller/control.php');
//echo '<div class="message">' . $_POST['data'] . '</div>';
$con = new Control();

$con->connect();
$query = 'INSERT INTO message(message, created) VALUES ("'.$_POST['data'].'", NOW())';
$con->insert( $query );
$con->close();

$con->connect();
$query = 'SELECT * FROM message ORDER BY id DESC LIMIT 5';
$data = $con->query( $query );
$con->close();

foreach( $data AS $item ){
    $classname = 'impar';
    if( $item['id'] % 2 == 0 )
        $classname = 'par';
    echo '<div class="message '.$classname.'">' . $item['message'] . '</div>';
    //echo '<div class="message">' . $item['message'] . '</div>';
}
