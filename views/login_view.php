<!doctype html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= ucfirst($page) ?> | KDev</title>
</head>
<body>

<?php include_once 'views/includes/header.php' ?>

<div class="cover-container pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center black animate-zoom">
    <h1 class="display-4">Login</h1>
    <p class="lead">To enter in the dashboard, please login!</p>
</div>
<div class="container black">
    <div class="card-deck mb-3">
        <form class="container top-empty" method="post" action="">
            <div class="row black animate-bottom">
                <div class="col">
                </div>
                <div class="col-6">
                    <div class="spacer"></div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                    </div>
                    <div class="center spacer">
                        <button type="button" class="btn btn-lg btn-block btn-outline-danger">Login</button>
                    </div>
                    <div class="center">
                    </div>

                </div>
                <div class="col">
                </div>
            </div>
        </form>
    </div>
</div>

<?php
include_once 'views/includes/footer.php';
include_once 'views/includes/scripts.php';
?>