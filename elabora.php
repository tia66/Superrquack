<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $data_nascita = $_POST['data-nascita'];
    $luogo_nascita = $_POST['luogo-nascita'];
    $opzione = $_POST['opzione'];

    
    $file = fopen("risposte.txt", "a");
    fwrite($file, "Nome: $nome\nCognome: $cognome\nData di nascita: $data_nascita\nLuogo di nascita: $luogo_nascita\nOpzione: $opzione\n\n");
    fclose($file);

        header("Location: index.html");
    exit();
} 
?>
