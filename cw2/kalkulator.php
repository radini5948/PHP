<?php
$pageTitle = "Kalkulator kosztów podróży";
include('header.html');
?>
<?php
// Funkcja do generowania przycisków radio
function createRadio($value, $name = 'price') {
    $checked = ($value == '5.96') ? 'checked' : '';
    echo "<input type='radio' name='$name' value='$value' $checked> $value ";
}
?>

<main>
    <h2>Kalkulator kosztów podróży</h2>
    <form method="post">
        <label for="distance">Dystans w kilometrach:</label><br>
        <input type="number" name="distance" id="distance" min="1" step="1" required><br><br>

        <p>Średnia cena za litr paliwa:</p>
        <?php
            createRadio("5.96");
            createRadio("6.14");
            createRadio("6.58");
        ?>

        <br><br>

        <label for="usage">Zużycie paliwa:</label>
        <select name="usage" id="usage">
            <option value="12.5">Duże</option>
            <option value="14.2" selected>Przeciętne</option>
            <option value="16.6">Niskie</option>
            <option value="20">Rewelacyjne</option>
        </select><br><br>

        <input type="submit" value="Oblicz">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $distance = $_POST['distance'];
        $price = $_POST['price'];
        $usage = $_POST['usage'];

        if (!is_numeric($distance) || $distance <= 0) {
            echo "<p class='error-message'>Proszę podać poprawny dystans w kilometrach.</p>";
        } else {
            $fuelUsed = $distance / $usage;
            $cost = $fuelUsed * $price;
            $time = $distance / 75;

            echo "<div class='result-box'>";
            echo "<p><strong>Wyniki podróży:</strong></p>";
            echo "<p>Zużyte paliwo: " . number_format($fuelUsed, 2) . " litrów</p>";
            echo "<p>Całkowity koszt podróży: " . number_format($cost, 2) . " zł</p>";
            echo "<p>Czas podróży: " . number_format($time, 2) . " godzin</p>";
            echo "</div>";
        }
    }
    ?>
</main>

<?php include 'footer.html'; ?>
