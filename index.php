<?php
include_once "isAuthenticated.php";
include_once "fragments/header.php";
include_once "fragments/nav.php";
?>
    <div class="container fixOverflow">
        <div class="row ">
            <p class="offset-5 setFont text-info ">Welcome back <span class="font-weight-bold"><?=$_SESSION['name']?></span>!</p>
        </div>

    </div>

    </body>
</hmtl>
