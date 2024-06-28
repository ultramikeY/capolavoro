<?php
$servername = "localhost";
$username = "tuo_username_db";
$password = "tua_password_db";
$dbname = "tuo_database";

// Crea connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Preleva i dati dal form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);

// Prepara e esegui l'insert
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Registrazione avvenuta con successo";
} else {
    echo "Errore: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
