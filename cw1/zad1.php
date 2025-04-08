<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oranges = isset($_POST["oranges"]) ? (int)$_POST["oranges"] : 0;
    $bananas = isset($_POST["bananas"]) ? (int)$_POST["bananas"] : 0;
    $discount = "Rabat nie został przyznany";

    if ($oranges > 25 && $bananas > 30) {
        $discount = "25% rabatu";
    } elseif ($oranges > 30 || $bananas > 35) {
        $discount = "15% rabatu";
    } elseif ($oranges >= 5 && $bananas >= 5) {
        $discount = "5% rabatu";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator rabatu</title>
</head>
<body>
    <form method="post">
        <label for="oranges">Liczba pomarańczy:</label>
        <input type="number" id="oranges" name="oranges" min="0" required>
        <br>
        <label for="bananas">Liczba bananów:</label>
        <input type="number" id="bananas" name="bananas" min="0" required>
        <br>
        <button type="submit">Wyślij zapytanie</button>
    </form>
    
    <?php if (isset($discount)) { ?>
        <p><?php echo $discount; ?></p>
    <?php } ?>
</body>
</html>
