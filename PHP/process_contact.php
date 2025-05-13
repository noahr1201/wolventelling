<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './db_Config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);
    $query = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($mysqli, $query)) {
        header('Location: /Pages/success.html');
        exit();
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    header('Location: /Pages/contact.php');
    exit();
}
?>