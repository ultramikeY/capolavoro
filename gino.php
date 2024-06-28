<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ClientiDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ottieni i dati dal corpo della richiesta
$data = json_decode(file_get_contents("php://input"), true);
$nome = $data["Nome"];
$cognome = $data["Cognome"];
$dataNascita = $data["DataNascita"];

// Inserisci i dati nella tabella
$sql = "INSERT INTO Cliente (Nome, Cognome, DataNascita) VALUES ('$nome', '$cognome', '$dataNascita')";

if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Record inserito con successo"]);
} else {
    echo json_encode(["error" => "Errore: " . $sql . "<br>" . $conn->error]);
}

$conn->close();
?>