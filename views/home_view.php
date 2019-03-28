<!doctype html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= ucfirst($page) ?> | KDev</title>
</head>
<body>

<?php include_once 'views/includes/header.php' ?>

<div class="rasp-container-heading pricing-header px-3 py-3 three-rem pb-md-1 mx-auto text-center black animate-zoom">
    <h1 class="display-4">Raspberry Status</h1>
    <p class="co-lead">An optimized dashboard, allowing you to see very quickly, the main information of your Raspberry Pi !</br>
        Also view the status of the services you want, as well as the performance of it !</p>
</div>
<div class="rasp-alert px-3 py-3 pb-md-4 mx-auto text-center black animate-zoom">
    <div class="alert alert-danger-outline">
        <h4 class="alert-heading display-5">Why Register ?</h4>
        <p class="mb-0">You will find on the dashboard, all the explanations necessary for the installation of your own Raspberry Status !<br/>
            You can also get help with a messaging support system !</p>
    </div >
</div>

<div class="container black">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm animate-bottom">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal white">Optimized</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><i class="fal fa-tachometer-alt-fastest fa-2x red"></i>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>An optimized application for maximum speed</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-danger">Source Code (Github)</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm animate-bottom">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal white">Responsive</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><i class="fal fa-mobile-android fa-2x red"></i>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Available for all screens</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-danger">Show Phone Version</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm animate-bottom">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal white">Adaptable</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title"><i class="fal fa-layer-group fa-2x red"></i>
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Add as many services as desired</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-danger">In the Dashboard</button>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'views/includes/footer.php';
include_once 'views/includes/scripts.php';
?>