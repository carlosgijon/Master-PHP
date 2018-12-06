<?php

// VARIABLES SUPERGLOBALES

// servidor

echo '<h1> VARIABLES SUPERGLOBALES DE SERVIDOR</h1>';
echo '<p>direccion del server: <span style="background-color: darkturquoise; color:white">'.$_SERVER['SERVER_ADDR'].'</span></p>';  // printa ::1 que significa localhost
echo '<p>nombre del server: <span style="background-color: darkturquoise; color:white">'.$_SERVER['SERVER_NAME'].'</span></p>';  // printará el nombre del servidor
echo '<p>Software que utilizamos: <span style="background-color: darkturquoise; color:white">'.$_SERVER['SERVER_SOFTWARE'].'</span></p>';  // Printa el software para MAMP que utilizamos (APACHE)
echo '<p>Protocolo: <span style="background-color: darkturquoise; color:white">'.$_SERVER['SERVER_PROTOCOL'].'</span></p>';  // Printa el protocolo que usamos
echo '<p>Navegador que se utiliza: <span style="background-color: darkturquoise; color:white">'.$_SERVER['HTTP_USER_AGENT'].'</span></p>';
echo '<p>Ip del usuario: <span style="background-color: darkturquoise; color:white">'.$_SERVER['REMOTE_ADDR'].'</span></p>';  // printa ::1 que significa localhost

