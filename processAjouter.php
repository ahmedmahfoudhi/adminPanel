<?php
include_once "isAuthenticated.php";
include_once "autoload.php";

function isOk($var){
    $check = isset($var) && $var != "";
    if(!$check){
        die(var_dump($var));
    }
    return $check;
}


if(isOk($_POST['name']) && isOk($_POST['password']) && isset($_POST['age']) && $_POST['age'] > 12) {
    $path = "assets/images/";
    $src = $_FILES['avatar']['tmp_name'];
    $isImage = getimagesize($_FILES["avatar"]["tmp_name"]);

    $imagename = null;
    if (isset($_FILES['avatar']) && $isImage == true) {
        $imagename = uniqid() . $_FILES['avatar']['name'];
    } else {
        header("location:ajouter.php?errorMSG=File is not an image!");
    }
    $dest = $path . $imagename;
    $p = new PersonneRepository();

    $isAdded = $p->add(['name', 'password', 'avatar', 'age', 'job'], [$_POST['name'], $_POST['password'], $imagename, $_POST['age'], $_POST['job']]);
    if($isAdded){
        move_uploaded_file($src, $dest);
        header("location:ajouter.php?successMSG=Person is added successfully!");
        die();
    }
    header("location:ajouter.php?errorMSG=Unfortunately, Person was not added please re-check before submission");

}
header("location:ajouter.php?errorMSG=Fill the required inputs please!");
