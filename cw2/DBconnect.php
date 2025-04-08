<?php
DEFINE ('DB_USER','uzytkownik');
DEFINE ('DB_PASSWORD','haslo');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','sitename');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD, DB_NAME) OR die ("Brak polaczenia".mysqli_connect_error());
?>
