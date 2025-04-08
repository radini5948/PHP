<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="navbar">
                <strong>Twoja Witryna</strong>
                <nav>
                    <a href="#">Strona Główna</a>
                    <a href="#">Zarejestruj się</a>
                    <a href="#">Użytkownicy</a>
                    <a href="#">Zmiana Hasła</a>
                </nav>
            </div>
        </header>
        <main>
            <h2>Zmień hasło</h2>
                <form action="register.php" method="POST">
                <label>Imię: <input type="text" name="first_name" required></label><br>
                <label>Nazwisko: <input type="text" name="last_name" required></label><br>
                <label>Adres e-mail: <input type="email" name="email" required></label><br>
                <label>Hasło: <input type="password" name="pass" required></label><br>
                <label>Powtórz hasło: <input type="password" name="pass" required></label><br>
                <button type="submit">Zarejestruj</button>
            </form>
        </main>
        <footer>
            <p>Copyright ©</p>
        </footer>
    </div>
</body>
</html>