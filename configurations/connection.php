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

//$HOST   = 'localhost';
//$USER   = 'n2yco435_no_time';
//$PASS   = 'o;(Vz#kmwiZG';
//$DBA    = 'n2yco435_no_time';
//
//$connection  = mysqli_connect($HOST, $USER, $PASS, $DBA);
//
//if($connection){
//    return $connection;
//    echo "Conectado";
//}else{
//    echo "erro";
//}
