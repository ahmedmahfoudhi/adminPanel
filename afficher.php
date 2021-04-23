<?php
include_once "isAuthenticated.php";
include_once "autoload.php";
include_once "header.php";
include_once "nav.php";
$aux = new PersonneRepository();
$res = $aux->findAll();
?>

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="assets/images/test1.jpg" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="assets/images/test1.jpg" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="assets/images/test1.jpg" class="card-img-top" alt="avatar">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>


