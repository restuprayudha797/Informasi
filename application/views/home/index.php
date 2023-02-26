<?php

$date = date("l, M-d-y");



?>


<div class="header">
    <img src="<?= base_url('assets/img/mudabg.png') ?>" width="100%" alt="">
</div>

<div class="date wrap
  border text-light">
    <div class="row">
        <div class="jam text-center">
            <h1 class="mt-3"><span onload="time()" id="span"></span></h1>
            <h4><span><?= $date ?></span></h4>
            <h2><i class="fas fa-bell fa-2xl"></i></h2>
        </div>

    </div>
</div>

<div class="wrap
">

    <h2 class="text-center">Daftar Jadwal Kegiatan Hari ini</h2 class="text-center">
    <div class="tables">
        <table class="table text-center mt-3" border="1">
            <thead class="table-secondary">
                <tr>
                    <td>No</td>
                    <td>Nama Kegiatan</td>
                    <td>Penanggung Jawab</td>
                    <td>Tanggal Kegiatan</td>
                    <td>Waktu Mulai</td>
                    <td>Waktu Selesai</td>
                    <td>Tempat</td>
                </tr>
            </thead>
            <tbody class="bg-light">
                <?php $i = 1;  ?>
                <?php foreach ($toDay as $today) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $today['nameOfActivity'] ?></td>
                        <td><?= $today['personResponsible'] ?></td>
                        <td><?= $today['activityDate'] ?></td>
                        <td><?= $today['startTime'] ?></td>
                        <td><?= $today['timesUp'] ?></td>
                        <td><?= $today['location'] ?></td>

                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>
<div class="wrap
">

    <h2 class="text-center">Daftar Jadwal Kegiatan Besok</h2 class="text-center">
    <div class="tables">
        <table class="table text-center mt-3" border="1">
            <thead class="table-secondary">
                <tr>
                    <td>No</td>
                    <td>Nama Kegiatan</td>
                    <td>Penanggung Jawab</td>
                    <td>Tanggal Kegiatan</td>
                    <td>Waktu Mulai</td>
                    <td>Waktu Selesai</td>
                    <td>Tempat</td>
                </tr>
            </thead>
            <tbody class="bg-light">
                <?php $i = 1;  ?>
                <?php foreach ($Tomorrow as $row) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row['nameOfActivity'] ?></td>
                        <td><?= $row['personResponsible'] ?></td>
                        <td><?= $row['activityDate'] ?></td>
                        <td><?= $row['startTime'] ?></td>
                        <td><?= $row['timesUp'] ?></td>
                        <td><?= $row['location'] ?></td>

                    </tr>
                    <?php $i++ ?>
                <?php endforeach ?>


            </tbody>
        </table>
    </div>

</div>