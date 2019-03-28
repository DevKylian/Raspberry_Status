<!doctype html>
<html lang="fr">
<head>
    <?php include_once 'views/includes/head.php' ?>
    <title><?= ucfirst($page) ?> | KDev</title>
</head>
<body>

<?php include_once 'views/includes/header_dashboard.php' ?>

<div class="rasp-table px-3 py-3 three-rem mx-auto animate-zoom table-font-size">
    <div class="row">
        <div class="col-sm"><div class="card white bg-light mb-3 center" style="max-width: 20rem;">
                <div class="card-header">Uptime</div>
                <div class="card-body">
                    <i class="far fa-stopwatch black fa-4x pb-4 pt-2"></i>
                    <p class="black font-weight-bolder text-uppercase">14 hours</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div></div>
        <div class="col-sm"><div class="card white bg-light mb-3 center" style="max-width: 20rem;">
                <div class="card-header">Disk</div>
                <div class="card-body">
                    <i class="far fa-hdd black fa-4x pb-4 pt-2"></i>
                    <p class="black font-weight-bolder text-uppercase">25 / 128 Go</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div></div>
        <div class="col-sm"><div class="card white bg-light mb-3 center" style="max-width: 20rem;">
                <div class="card-header">Ram</div>
                <div class="card-body">
                    <i class="far fa-memory black fa-4x pb-4 pt-2"></i>
                    <p class="black font-weight-bolder text-uppercase">2 %</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div></div>
        <div class="col-sm"><div class="card white bg-light mb-3 center" style="max-width: 20rem;">
                <div class="card-header">CPU Utilisation</div>
                <div class="card-body">
                    <i class="far fa-microchip black fa-4x pb-4 pt-2"></i>
                    <p class="black font-weight-bolder text-uppercase">8 %</p>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 8%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div></div>
    </div>


<table class="table table-hover">
    <thead>
    <tr class="table-dark-nohover">
        <th scope="col">#</th>
        <th scope="col">Service</th>
        <th scope="col">Port</th>
        <th scope="col">Status</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-light">
        <th scope="row">1</th>
        <td>Apache</td>
        <td>80</td>
        <td>
            <span class="badge badge-success fa-1-2x"><i class="fas fa-check-circle white"></i> ONLINE</span>
        </td>
        <td>
            <i class="fas fa-power-off black fa-1-5x marge"></i>
            <i class="fas fa-info-circle black fa-1-5x"></i>
        </td>
    </tr>
    <tr class="table-dark">
        <th scope="row">2</th>
        <td>FTP</td>
        <td>21</td>
        <td>
            <span class="badge badge-success fa-1-2x"><i class="fas fa-check-circle white"></i> ONLINE</span>
        </td>
        <td>
            <i class="fas fa-power-off black fa-1-5x marge"></i>
            <i class="fas fa-info-circle black fa-1-5x"></i>
        </td>
    </tr>
    <tr class="table-light">
        <th scope="row">3</th>
        <td>SSH</td>
        <td>22</td>
        <td>
            <span class="badge badge-success fa-1-2x"><i class="fas fa-check-circle white"></i> ONLINE</span>
        </td>
        <td>
            <i class="fas fa-power-off black fa-1-5x marge"></i>
            <i class="fas fa-info-circle black fa-1-5x"></i>
        </td>
    </tr>
    <tr class="table-dark">
        <th scope="row">4</th>
        <td>MYSQL</td>
        <td>3306</td>
        <td>
            <span class="badge badge-danger fa-1-2x"><i class="fas fa-times-circle white"></i> OFFLINE</span>
        </td>
        <td>
            <i class="fas fa-power-off black fa-1-5x marge"></i>
            <i class="fas fa-info-circle black fa-1-5x"></i>
        </td>
    </tr>
    </tbody>
</table>
</div>

<?php
include_once 'views/includes/footer.php';
include_once 'views/includes/scripts.php';
?>