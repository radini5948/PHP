

<?php
include 'DBconnect.php';

if (!$dbc) {
    die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES (?, ?, ?, ?, NOW())";
    
    $stmt = $dbc->prepare($sql);
    if ($stmt === false) {
        die("Błąd przygotowania zapytania: " . $dbc->error);
    }

    $stmt->bind_param("ssss", $first_name, $last_name, $email, $pass);

    if ($stmt->execute()) {
        echo "Rejestracja zakończona sukcesem!";
    } else {
        echo "Błąd: " . $dbc->error;
    }

    $stmt->close();
    $dbc->close();
}
?>
