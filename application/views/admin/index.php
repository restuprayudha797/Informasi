<?php


$userData = 0;
foreach ($users as $row) {

    $userData++;
}

$activityData = 0;
foreach ($activity as $row) {

    $userData++;
}

$cancelData = 0;
foreach ($cancel as $row) {

    $cancelData++;
}

$doneData = 0;
foreach ($done as $row) {

    $doneData++;
}



?>


<!-- Begin Page Content -->
<div class="container-fluid" style="height: 100%;">


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Dashboard
            </h6>
        </div>
        <div class="card-body">

            <div class="row ">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="<?= base_url('admin/users') ?>">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Users Data</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $userData ?></div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="<?= base_url('admin/activity') ?>">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">

                                            Activity Data</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $activityData ?></div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="<?= base_url('admin/cancelActivities') ?>">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Canceled
                                            Activities
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?= $cancelData ?>
                                                </div>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="<?= base_url('admin/carriedOutActivities') ?>">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Carried out activities</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $doneData ?></div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- Content Row -->


    </div>
</div>
<!-- End of Content Wrapper -->