<?php
include_once "isAuthenticated.php";
include_once "autoload.php";
include_once "fragments/header.php";
include_once "fragments/nav.php";
?>

<div class="container fixOverflow">

    <div class="row d-flex justify-content-center align-items-center height600">

        <div class="col-8 h-50 bd-highlight">
            <?php
            if(isset($_GET['errorMSG']) && $_GET['errorMSG'] != ""){
                echo "<div class = 'text-center text-danger'>".$_GET['errorMSG']."</div>";
            }else if(isset($_GET['successMSG']) && $_GET['successMSG']){
                echo "<div class = 'text-center text-success'>".$_GET['successMSG']."</div>";
            }
            ?>
            <form method="POST" action="processAjouter.php" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control border border-secondary" name="name" id="name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control border border-secondary" name="password" id="password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="age" class="col-sm-2 col-form-label">age</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control border border-secondary" name="age" id="age">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Job" class="col-sm-2 col-form-label">Job</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control border border-secondary" name="job" id="Job">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Avatar" class="col-sm-2 col-form-label">Avatar</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control border border-secondary" name="avatar" id="Avatar">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>

