<?php
    $GLOBALS['title'] = "Home";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <link rel="stylesheet" href="assets/styles/style.css?v=<?php echo time(); ?>">
    <title><?php echo ((isset($GLOBALS['title']) && $GLOBALS['title'] != "") ? $GLOBALS['title'] : "Home")?></title>
</head>


