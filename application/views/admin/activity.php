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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add New Activity
                </button>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($activity as $row) : ?>

                            <?php if ($row['role_activity'] == 1) : ?>
                                <tr class="bg-danger text-light">
                                    <td><?= $i ?></td>
                                    <td><?= $row['nameOfActivity'] ?></td>
                                    <td><?= $row['personResponsible'] ?></td>
                                    <td><?= $row['activityDate'] ?></td>
                                    <td><?= $row['startTime'] ?></td>
                                    <td><?= $row['timesUp'] ?></td>
                                    <td><?= $row['location'] ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/deleteActivity/' . $row['id_activity']) ?>" class="btn btn-danger border">Delete</a>
                                    </td>
                                </tr>

                            <?php else : ?>
                                <tr class="">
                                    <td><?= $i ?></td>
                                    <td><?= $row['nameOfActivity'] ?></td>
                                    <td><?= $row['personResponsible'] ?></td>
                                    <td><?= $row['activityDate'] ?></td>
                                    <td><?= $row['startTime'] ?></td>
                                    <td><?= $row['timesUp'] ?></td>
                                    <td><?= $row['location'] ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/deleteActivity/' . $row['id_activity']) ?>" class="btn btn-danger">Delete</a>
                                        <a href="<?= base_url('admin/activity/cancelActivity/' . $row['id_activity']) ?>" class="btn btn-info">Cancel Activity</a>

                                    </td>
                                </tr>
                            <?php endif; ?>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= base_url('admin/activity') ?>" method="post">
                    <div class="mb-3">
                        <label for="nameOfActivity" class="form-label">Name of activity</label>
                        <input type="input" class="form-control" name="nameOfActivity" placeholder="Input Activity">
                    </div>
                    <div class="mb-3">
                        <label for="personResponsible" class="form-label">Person responsible</label>
                        <input type="input" class="form-control" name="personResponsible" id="personResponsible" placeholder="Input Activity">
                    </div>
                    <div class="mb-3">
                        <label for="activityDate" class="form-label">Activity Date</label>
                        <input type="date" class="form-control" name="activityDate" id="activityDate">
                    </div>
                    <div class="mb-3">
                        <label for="startTime" class="form-label">Start Time</label>
                        <input type="time" class="form-control" name="startTime" id="startTime">
                    </div>
                    <div class="mb-3">
                        <label for="timesUp" class="form-label">Time's Up</label>
                        <input type="time" class="form-control" name="timesUp" id="timesUp">
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location
                        </label>
                        <input type="input" class="form-control" name="location" id="location" placeholder="Input Location">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="kirim" class="btn btn-primary">Save changes</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- end Modal -->