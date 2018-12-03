<?php

/*
 *
 * TIPOS DE DATOS
 *
 * Entero (int / integer) = 99
 * Coma flotante / decimales (float / double) = 3,45
 * Cadenas de caracteres (string) = "Hola, soy un String"
 * Booleano (bool) = 1 o 0 o true o false
 * Nulo (null) no tiene ningún contenido
 * Array (Coleccion de datos)
 * Objetos
 *
 * */

// Definiicion de variable. PHP es no tipado.
$numero = 100;
$decimal = 27.9;
$texto = "Hola soy un texto \" $numero";

$verdadero = true;
echo '<p>Si un booleano es true, devolvera <span style="display: inline-block; min-width: 100px; text-align: center; color: white; background-color: green">'.$verdadero.'</span></p>';
$verdadero = false;
echo '<p>Si un booleano es false, devolvera: <span style="display: inline-block; min-width: 100px; text-align: center; color: white; background-color: red">'.$verdadero.'</span>No devolverá nada</p>';
$nula = null;

// funcion para reconocer el tipo de dato que tiene una variable.
echo '<p> La variable es un '.gettype($numero). '</p>';
echo '<p> La variable es un '.gettype($decimal). '</p>';
echo '<p> La variable es un '.gettype($texto). '</p>';
echo '<p> La variable es un '.gettype($verdadero). '</p>';
echo '<p> La variable es un '.gettype($nula). '</p>';

// Debug
// $nombre[] = "Carlos Gijón Fernández";
// $nombre[] = "Carlos Gijón Fernández";
// var_dump($nombre);

