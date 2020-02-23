<?php
$HOST   = 'localhost';
$USER   = 'root';
$PASS   = '';
$DBA    = 'no_time';

$connection  = mysqli_connect($HOST, $USER, $PASS, $DBA);

if($connection){
    return $connection;
    echo "Conectado";
}else{
    echo "erro";
}