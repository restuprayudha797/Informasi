<!-- Begin Page Content -->

<div class="container-fluid" style="height: 100%;">




    <div class="notification" id="notification">
        <?= $this->session->flashdata('admin_message') ?>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Users Data
            </h6>
        </div>
        <div class="card-body">
            <div class="">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add New Users
                </button>
            </div>
            <div class="table-responsive p-3">

                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Name</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $row) : ?>
                        <tr class="">
                            <td><?= $i ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <?php if ($row['name'] == 'administrator') : ?>
                            <td class="bg-success">
                                <span class="text-light">Super Admin</span>
                            </td>

                            <?php else : ?>

                            <td>
                                <a href="<?= base_url('admin/deletedUser/') . $row['id_users'] ?>"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                    class="btn btn-danger">delete</a>
                            </td>

                            <?php endif ?>
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


    <!-- End of Content Wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Users</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="<?= base_url('admin/users') ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Input name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Input Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Input password">
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