<?php
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');
define ('DB_NAME','sitename');
// testowy komentarz
$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME) OR die ("Brak polaczenia" .mysqli_connect_error());
?>
