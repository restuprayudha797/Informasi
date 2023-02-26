<!-- Begin Page Content -->
<div class="container-fluid" style="height: 100%;">

    <!-- Page Heading -->
    <div class="align-items-center justify-content-between mb-4">
        <i class="fas fa-tachometer-alt-fastest"></i>
        <h1 class="h3 mb-0 text-gray-800 text-start">activity data
        </h1>
    </div>


    <?= $this->session->flashdata('admin_message') ?>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="">

            </div>
            <div class="table-responsive p-3">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name of activity</th>
                            <th>Person responsible</th>
                            <th>Activity Date</th>
                            <th>Start Time</th>
                            <th>Time's up</th>
                            <th>Place</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($activity as $row) : ?>

                            <tr class="bg-light text-dark">
                                <td><?= $i ?></td>
                                <td><?= $row['nameOfActivity'] ?></td>
                                <td><?= $row['personResponsible'] ?></td>
                                <td><?= $row['activityDate'] ?></td>
                                <td><?= $row['startTime'] ?></td>
                                <td><?= $row['timesUp'] ?></td>
                                <td><?= $row['location'] ?></td>
                                <td class="bg-danger text-light">Canceled</td>

                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- /.container-fluid -->
    <!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->