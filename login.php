<?php
    session_start();
    if(isset($_SESSION['name'])){
        header('location:index.php');
    }

    $GLOBALS['title'] = "login";
    include_once "fragments/header.php";
?>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center height600">
            <div class="col-8 h-50 bd-highlight">
                <?php
                    if(isset($_GET['error']) && $_GET['error'] != ""){
                        echo "<div class = 'text-danger'>".$_GET['error']."</div>";
                    }
                ?>
                <form method="POST" action="processLogin.php">
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control border border-secondary" name="name" id="username">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control border border-secondary" name="password" id="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Connecter</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
