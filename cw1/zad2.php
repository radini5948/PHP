<?php
// Definicja tablicy
$array = [1, 2, 3, 4, 5];

// Usunięcie czwartego elementu (indeks 3)
unset($array[3]);

// Przenumerowanie indeksów
$array = array_values($array);

// Wyświetlenie wyniku
var_dump($array);
?>