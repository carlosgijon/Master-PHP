<?php

// CONSTANTES
// Es un contenedor de informacion que no puede variar
// Para mostrarlas se ponen sin el simbolo de dolar.

// Se definen asi:
define('nombre', 'Carlos Gijón');
define('web', 'www.carlos.com');

echo '<h1>CONSTANTES</h1>';

echo '<h2>Definicion y como printar constantes</h2>';

echo '<p>Para mostrar constantes se hace sin el simbolo $, por ejemplo <span style="display: inline-block; width: 100px; text-align: center;background-color: #227093; color: white;">';
echo nombre;
echo '</span></p>';

// CONSTANTES PREDEFINIDAS

echo '<h2>Constantes predefinidas</h2>';

echo '<table border="1" cellspacing="0" >';
echo    '<tr>';
echo        '<td>Version de Php (PHP_VERSION)</td>';
echo        '<td>'.PHP_VERSION.'</td>';
echo    '</tr>';

echo    '<tr>';
echo        '<td>Sistema operativo (PHP_OS)</td>';
echo        '<td>'.PHP_OS.'</td>';
echo    '</tr>';

echo    '<tr>';
echo        '<td>Carpetas de extensiones de php (PHP_EXTENSION_DIR)</td>';
echo        '<td>'.PHP_EXTENSION_DIR.'</td>';
echo    '</tr>';

echo    '<tr>';
echo        '<td>Linea que contiene este código (__LINE__)</td>';
echo        '<td>'.__LINE__.'</td>';
echo    '</tr>';

echo    '<tr>';
echo        '<td>Ruta de este archivo (__FILE__)</td>';
echo        '<td>'.__FILE__.'</td>';
echo    '</tr>';

echo    '<tr>';
echo        '<td>Nombre de la función dentro de la que estamos (__FUNCTION__)</td>';
echo        '<td>'.__FUNCTION__.'</td>';
echo    '</tr>';


