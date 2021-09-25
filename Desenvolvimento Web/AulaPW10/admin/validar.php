<?php
session_start();

$snome = '';
$snivel = '';

if (isset($_SESSION['snome']) && isset($_SESSION['snivel'])) {
    $snome = $_SESSION['snome'];
    $snivel = $_SESSION['snivel'];

    echo $snome . '-' . $snivel;
} else {

    header('Location:../login.php');
}
