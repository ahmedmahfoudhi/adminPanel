<?php
include_once "isAuthenticated.php";
include_once "autoload.php";
include_once "fragments/header.php";
include_once "fragments/nav.php";
$aux = new PersonneRepository();
$res = $aux->findAll();
?>

<div class="fixOverflow container ">
    <div class="row">
        <?php
            foreach($res as $p){

                ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/images/<?=$p['avatar']?>" class="styleImage card-img-top " alt="avatar">
                        <div class="card-body">
                            <h3 class="text-center"><?=$p['name']?></h3>
                            <ul class="list-group">
                                <li class="list-group-item removeBorder">Age : <?=$p['age']?></li>
                                <li class="list-group-item removeBorder">Job : <?=$p['job']?></li>
                                <li class="list-group-item removeBorder">Password : <?=$p['password']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>

    </div>
</div>
</body>
</html>


