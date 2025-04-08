<?php
$month_temp = "15, 20, 23, 20, 13, 16, 21, 18, 22, 25, 24, 23, 26, 29, 21, 21, 23, 17, 19, 22, 23, 21, 19, 24, 20, 23, 28, 22, 23, 27";

// Przekształcenie łańcucha w tablicę
$temp_array = array_map('intval', explode(", ", $month_temp));

// Obliczenie średniej temperatury
$average_temp = array_sum($temp_array) / count($temp_array);
$average_temp = number_format($average_temp, 2);

// Sortowanie tablicy w kolejności rosnącej
sort($temp_array);

// Pobranie pięciu najniższych temperatur
$lowest_temps = array_slice($temp_array, 0, 5);

// Pobranie pięciu najwyższych temperatur
$highest_temps = array_slice($temp_array, -5, 5);

// Wyświetlenie wyników
echo "Średnia temperatura: $average_temp °C<br>";
echo "Pięć najniższych temperatur: " . implode(", ", $lowest_temps) . "<br>";
echo "Pięć najwyższych temperatur: " . implode(", ", $highest_temps) . "<br>";
?>