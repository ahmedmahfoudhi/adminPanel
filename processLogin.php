<?php
session_start();
include_once "autoload.php";

if(isset($_SESSION['name'])){
    header("location:index.php");
}
if( isset($_POST['name']) && isset($_POST['password']) && $_POST['name'] != "" && $_POST['password'] !=""){
    $res = PersonneRepository::findAdmin($_POST['name'],$_POST['password']);
    if(is_array($res)){
        $_SESSION['id'] = $res["id"];
        $_SESSION['name'] = $_POST['name'];
        header("location:index.php?msg=Welcome Back!");
    }
}
header("location:login.php?error=Name and password were wrong, Please verify your information");





