<?php
// Tablica wielowymiarowa - spis książek na regałach
$bookshelves = [
    "regał 1" => [
        ["author" => "Marcin Lis", "title" => "PHP. Ćwiczenia praktyczne", "id" => 111],
        ["author" => "Jon Duckett", "title" => "JavaScript i jQuery", "id" => 112],
        ["author" => "Jakub Kozera", "title" => "ASP.NET Core", "id" => 113]
    ],
    "regał 2" => [
        ["author" => "Remigiusz Mróz", "title" => "Precedens", "id" => 211],
        ["author" => "Robert Małecki", "title" => "Wada", "id" => 212],
        ["author" => "Hideo Yokoyama", "title" => "Sześć cztery", "id" => 213]
    ],
    "regał 3" => [
        ["author" => "Ted Chiang", "title" => "Wydech", "id" => 311],
        ["author" => "Stephen Baxter", "title" => "Proxima", "id" => 312],
        ["author" => "James S.A. Corey", "title" => "Przebudzenie Lewiatana", "id" => 313]
    ]
];

// Wyświetlenie spisu książek
foreach ($bookshelves as $shelf => $books) {
    echo "<strong>$shelf</strong><br>";
    foreach ($books as $book) {
        echo "{$book['author']} | {$book['title']} | {$book['id']}<br>";
    }
    echo "<br>";
}
?>