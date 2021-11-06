<?php
session_start();

$sid = '';
$snome = '';
$snivel = '';

if (isset($_SESSION['sid']) && 
    isset($_SESSION['snome']) && 
    isset($_SESSION['snivel'])) {

    $sid = $_SESSION['sid'];
    $snome = $_SESSION['snome'];
    $snivel = $_SESSION['snivel'];

} else {
    header('Location:../login.php');
}
