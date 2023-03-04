<!-- Begin Page Content -->

<div class="container-fluid" style="height: 100%;">




    <div class="notification" id="notification">
        <?= $this->session->flashdata('admin_message') ?>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Activity Data
            </h6>
        </div>
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

                            <?php if ($row['role_activity'] == 1 || $row['role_activity'] == 2) : ?>
                                <tr class="bg-secondary text-light">
                                    <td><?= $i ?></td>
                                    <td><?= $row['nameOfActivity'] ?></td>
                                    <td><?= $row['personResponsible'] ?></td>
                                    <td><?= $row['activityDate'] ?></td>
                                    <td><?= $row['startTime'] ?></td>
                                    <td><?= $row['timesUp'] ?></td>
                                    <td><?= $row['location'] ?></td>
                                    <?php if ($row['role_activity'] == 2) : ?>

                                        <td class="bg-success">Done</td>
                                    <?php else : ?>

                                        <td class="bg-danger">Canceled</td>
                                    <?php endif; ?>
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
                                        <a href="<?= base_url('admin/cancelActivity/' . $row['id_activity']) ?>" class="btn btn-info">Cancel Activity</a>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?= $row['id_activity'] ?>">
                                            Edit
                                        </button>


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
</div>
<!-- end Modal -->


<!-- Modal for edit activity -->
<?php foreach ($activity as $row) : ?>

    <div class="modal fade" id="edit<?= $row['id_activity'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Activity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <span></span>
                    <form action="<?= base_url('admin/editActivity/' . $row['id_activity']) ?>" method="post">
                        <div class="mb-3">
                            <label for="nameOfActivity" class="form-label">Name of activity</label>
                            <input type="input" class="form-control" name="nameOfActivity" value="<?= $row['nameOfActivity'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="personResponsible" class="form-label">Person responsible</label>
                            <input type="input" class="form-control" name="personResponsible" id="personResponsible" value="<?= $row['personResponsible'] ?>">
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
                            <input type="input" class="form-control" name="location" id="location" value="<?= $row['location'] ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="kirim" class="btn btn-primary">Save changes</button>
                    </form>

                </div>
            </div>
        </div>
    <?php endforeach ?>

    <!-- end Modal  for edit activity-->