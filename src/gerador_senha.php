<?php

function senha_gerada($quantidade,$maiusculas,$minusculas,$caracteres,$numeros)
{
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $maiusculas = filter_input(INPUT_POST, 'maiusculas', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $minusculas = filter_input(INPUT_POST, 'minusculas', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $numeros = filter_input(INPUT_POST, 'numeros', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $caracteres = filter_input(INPUT_POST, 'caracteres', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $senha_ha_gerar = '';

    
    $maiusculas_do_gerador = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas_do_gerador = 'abcdefghijklmnopqrstuvwxyz';
    $caracteres_do_gerador = '!@#$%^&*()-_+=~`[]{}|:;,.<>?';
    $numeros_do_gerador = '0123456789';

    if(empty($quantidade))
    {
        $quantidade = 8;
        $senha_ha_gerar .= 
        str_shuffle($maiusculas_do_gerador) . 
        str_shuffle($numeros_do_gerador) .
        str_shuffle($caracteres_do_gerador) .
        str_shuffle($numeros_do_gerador);
    }
    
    if($maiusculas == 'Maiusculas')
    {
        $senha_ha_gerar .= str_shuffle($maiusculas_do_gerador);
    }

    if($minusculas == 'Minusculas')
    {
        $senha_ha_gerar .= str_shuffle($minusculas_do_gerador);
    }

    if($caracteres == 'Caracteres')
    {
        $senha_ha_gerar .= str_shuffle($caracteres_do_gerador);
    }

    if($numeros == 'Numeros')
    {
        $senha_ha_gerar .= str_shuffle($numeros_do_gerador);
    }

    $senha_gerada = substr(str_shuffle($senha_ha_gerar),0,$quantidade);
    return $senha_gerada;
}



