<?php

// OPERADORES ARITMETICOS

$numero1 = 55;
$numero2 = 33;

echo '<h1>OPERADORES ARITMETICOS</h1>';
echo '<p>Suma: '.($numero1 + $numero2).'</p>';
echo '<p>Resta: '.($numero1 - $numero2).'</p>';
echo '<p>Multiplicación: '.($numero1 * $numero2).'</p>';
echo '<p>División: '.($numero1 / $numero2).'</p>';
echo '<p>Resto: '.($numero1 % $numero2).'</p>';

// OPERADORES DE INCREMENTO Y DECREMENTO
$año = 2019;

echo '<h1>OPERADORES DE INCREMENTO Y DECREMENTO</h1>';
echo '<h2>El año es: '.$año.'</h2>';

// Asi, incrementamos o decrementamos despues de mostrar el resultado

$año++;
echo '<p>Incremento detras: '.$año.'</p>';  // 2019++ = 2020

$año--;
echo '<p>Decremento detras: '.$año.'</p>';  //2020-- = 2019

// Asi, incrementamos o decrementamos antes de mostrar el resultado, por lo que no hará falta
// hacer esta operacion en una linea antes

echo '<p>Incremento delante: '.++$año.'</p>';  // ++año = 2020
echo '<p>Decremento delante: '.--$año.'</p>';  // --año = 2019

// OPERADORES DE ASIGNACION
$edad = 55;

echo '<h1>OPERADORES DE ASIGNACION</h1>';
echo '<p>edad: '.$edad.'</p>';
echo '<p>edad + 5: '.($edad += 5).'</p>';
echo '<p>edad - 5: '.($edad -= 5).'</p>';
echo '<p>edad * 5: '.($edad *= 5).'</p>';
echo '<p>edad / 5: '.($edad /= 5).'</p>';
