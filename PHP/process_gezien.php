<?php
require_once './db_Config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $naam = mysqli_real_escape_string($mysqli, $_POST['naam']);
    $plaats = mysqli_real_escape_string($mysqli, $_POST['plaats']);
    $datum = date('Y-m-d');
    $hoeveel = isset($_POST['hoeveel']) ? (int) $_POST['hoeveel'] : 1;

    $query = "INSERT INTO Sightings (naam, plaats, datum, hoeveel) VALUES ('$naam', '$plaats', '$datum', $hoeveel)";

    if (mysqli_query($mysqli, $query)) {
        header('Location: /Pages/success.html');
        exit();
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header('Location: /Pages/gezien.php');
    exit();
}
?>