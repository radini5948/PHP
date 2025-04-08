<?php
function getGenderText($gender) {
    return $gender === "female" ? "kobieta" : "mężczyzna";
}

function getAgeCategory($age) {
    switch ($age) {
        case "under_30": return "przed 30";
        case "between_30_60": return "wiek średni";
        case "over_60": return "60+";
        default: return "nieznany";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"] ?? "");
    $email = htmlspecialchars($_POST["email"] ?? "");
    $gender = $_POST["gender"] ?? "male";
    $age = $_POST["age"] ?? "under_30";
    $comments = htmlspecialchars($_POST["comments"] ?? "");

    $genderText = getGenderText($gender);
    $ageText = getAgeCategory($age);
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz</title>
</head>
<body>
    <form method="post">
        <label for="name">Nazwisko:</label>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Adres e-mail:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label>Płeć:</label>
        <input type="radio" name="gender" value="female" checked> Kobieta
        <input type="radio" name="gender" value="male"> Mężczyzna<br>
        
        <label for="age">Wiek:</label>
        <select id="age" name="age">
            <option value="under_30">Poniżej 30</option>
            <option value="between_30_60">Między 30 a 60</option>
            <option value="over_60">Powyżej 60</option>
        </select><br>
        
        <label for="comments">Uwagi:</label><br>
        <textarea id="comments" name="comments"></textarea><br>
        
        <button type="submit">Wyślij dane</button>
    </form>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
        <p><strong>Dziękuję Ci, <?php echo $name; ?>, za Twoje uwagi:</strong></p>
        <pre><?php echo $comments; ?></pre>
        <p>Odpowiedź prześlę na adres <?php echo $email; ?>.</p>
        <p>Wybrany wiek i płeć to: <?php echo $genderText . " " . $ageText; ?></p>
    <?php } ?>
</body>
</html>
