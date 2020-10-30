<?php

function generate($qtd){

$letrasminusculas = str_shuffle('
abcdefghijklmnopqrstuvwxyz'
); 

$letrasmaiusculas = str_shuffle('
ABCDEFGHIJKLMNOPQRSTUVWXYZ
');

$numeros = (
    (
        (date('Ymd') / 12) * 24) + mt_rand(800, 9999)
);

$numeros .= 1234567890;

$specialCharacters = str_shuffle('!@#$%*-');

$characters = $letrasmaiusculas.$letrasminusculas.$numeros.$specialCharacters;

$senhaGerada = substr(str_shuffle($characters), 0, $qtd);

return $senhaGerada;

}

?>