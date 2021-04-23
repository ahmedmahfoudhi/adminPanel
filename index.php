<?php
session_start();
if(!isset($_SESSION['name']))
    header("location:login.php");
include_once "fragments/header.php";
?>
