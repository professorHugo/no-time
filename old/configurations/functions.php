<?php

####################################
#     CONFIGURAÇÕES DO SISTEMA     #
####################################

/* * ***************************
  GERAR RESUMOS
 * *************************** */
function lmWord($string, $words = '35') {
    $string = strip_tags($string);
    $count = strlen($string);

    if ($count <= $words) {
        return $string;
    } else {
        $strpos = strrpos(substr($string, 0, $words), ' ');
        return substr($string, 0, $strpos);
    }
}

/* * ***************************
  VALIDA O EMAIL
 * *************************** */
function valMail($email) {
    if (preg_match('/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/', $email)) {
        return true;
    } else {
        return false;
    }
}


/* * ***************************
  FORMATAR DATA
 * *************************** */
function FormDate($data) {
    $timestamp = explode(" ", $data);
    $getData = $timestamp[0];
    $getTime = $timestamp[1];

    $setData = explode('/', $getData);
    $dia = $setData[0];
    $mes = $setData[1];
    $ano = $setData[2];

    if (!$getTime):$getTime = date('H:i:s');
    endif;

    $resultado = $dia . '-' . $mes . '-' . $ano . ' ' . $getTime;

    return $resultado;
}
