<?php

class Control{
    private $host = 'localhost';
    private $user = 'root';
    private $clave = '4m4z0n=n3';
    private $mysqli = NULL;
    private $database = 'rabioso';

    //----------
    function __construct(){}
    //----------

    //----------
    function connect(){
        $this->mysqli =  new mysqli( $this->host, $this->user, $this->clave, $this->database);

        if ($this->mysqli->connect_errno) {
            printf("Falló la conexión: %s\n", $this->mysqli->connect_error);
            exit();
        }
    }
    //----------

    //----------
    function close(){
        $this->mysqli->close();
    }
    //----------

    //----------
    function query( $sql = NULL ){
        $data = NULL;
        if( !empty( $sql ) ){
            $resultado = $this->mysqli->query( $sql );
            //while( $registro = $resultado->fetch_object() ){
            while( $registro = $resultado->fetch_assoc() ){
                $data[] = $registro;
            }
            /*mysqli_free_result($resultado);
            */
        }
        return ($data);
    }
    //----------

    //----------
    function insert( $sql = NULL ){
        if( !empty( $sql ) )
            $this->mysqli->query( $sql );
    }
    //----------







    //----------
    function connect2(){
        $this->mysqli =  mysql_connect( $this->host, $this->user, $this->clave);

        if  ( !$this->mysqli ) {
            die('No pudo conectarse: ' . mysql_error());
        }
        else{
            mysql_select_db($this->database, $this->mysqli) or die('Could not select database.');
        }
    }
    //----------

    //----------
    function close2(){
        mysql_close( $this->mysqli );
    }
    //----------

    //----------
    function query2( $sql = NULL ){
        $data = NULL;
        if( !empty( $sql ) ){
            $resultado = mysql_query( $sql );
            if (!$resultado) {
                die('Consulta no válida: ' . mysql_error());
            }
            else{
                while( $registro = mysql_fetch_assoc($resultado) ){
                    $data[] = $registro;
                }
            }
        }
        return ($data);
    }
    //----------

    //----------
    function insert2( $sql = NULL ){
        if( !empty( $sql ) )
            mysql_query( $sql );
    }
    //----------
}

