<?php
session_start();
ob_start();
if (isset($_SESSION['admin'])) {

    unset($_SESSION["admin"]);
    header('Location:login.php');
}
