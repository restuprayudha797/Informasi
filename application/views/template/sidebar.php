<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-user-lock"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Administrator</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?= $link1 ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <?php if ($this->session->userdata('email') == 'smkmudapekanbaru@gmail.com') : ?>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Users
        </div>
        <li class="nav-item <?= $link5 ?>">
            <a class="nav-link" href="<?= base_url('admin/users') ?>">
                <i class="fas fa-user"></i>
                <span>Users Data</span></a>
        </li>
        <!-- Heading -->
    <?php endif ?>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Activity
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item <?= $link2 ?>">
        <a class="nav-link" href="<?= base_url('admin/activity') ?>">
            <i class="fas fa-chart-line"></i>
            <span>Activity Data</span></a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item <?= $link3 ?>">
        <a class="nav-link" href="<?= base_url('admin/cancelActivities') ?>">
            <i class="fas fa-window-close"></i>
            <span>Canceled Activities</span></a>
    </li>

    <li class="nav-item <?= $link4 ?>">
        <a class="nav-link" href="<?= base_url('admin/carriedOutActivities') ?>">
            <i class="fas fa-check"></i>
            <span>carried out activities</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    <hr class="sidebar-divider d-none d-md-block">
    <div class="text-center">
        <h1><a class="text-danger" href="<?= base_url('logout') ?>" onclick="return confirm('apakah anda yakin untuk keluar dari halaman ini')"><i class="fas fa-sign-out-alt"></i></a></h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">



</ul>
<!-- End of Sidebar -->