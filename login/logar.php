<?php

session_start();
require '../config.php';
require DBAPI;

var_dump($_POST);

$login = filter_input(INPUT_POST,'login');
$senha = filter_input(INPUT_POST,'senha');

$con = open_database();

$hash = md5($senha);
$cmd = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";

$result = mysqli_query($con,$cmd);

if(mysqli_num_rows($result) == 1) {
    $_SESSION['login'] = $result['login'];
    $_SESSION['id'] = $result['id'];
    header("Location: ../index.php");
} else {
    unset($_SESSION['login']);
    unset($_SESSION['id']);
    header("Location: ../index.php");
}