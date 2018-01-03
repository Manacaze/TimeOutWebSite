<?php
/**
 * Created by PhpStorm.
 * User: Manacaze
 * Date: 1/3/2018
 * Time: 5:33 PM
 */

$url = filter_input(INPUT_SERVER, "REQUEST_URI");

$INIT = strpos($url, "&");

if($INIT){
    // Se na URL tiver ?, ele nao leva o que esta depois.
    $url = substr($url, 0, $INIT);
}
$url_pasta = substr($url, 1);
$url = explode("/", $url_pasta);

$posicao = 0;
$paginaErro = array('404');
$paginasSessao = array('signin', 'login');
////print_r($todasP);
foreach ($url as $cont => $value) {
    if($cont >= 1){
        $caminho[$posicao] = $value;
        $posicao++;
    }
}