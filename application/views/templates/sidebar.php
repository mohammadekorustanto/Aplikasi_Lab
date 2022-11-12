<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('guru'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">astrindo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->
    <!-- query menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`,`menu`
                        FROM `user_menu` JOIN `user_access_menu` 
                        ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                     WHERE `user_access_menu`. `role_id`= $role_id
                     ORDER BY `user_access_menu`.`menu_id` ASC
    ";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>
    <!-- Heading -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>
        <!-- sub Menu -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                            FROM `user_sub_menu` JOIN `user_menu` 
                            ON `user_sub_menu`.`menu_id`= `user_menu`.`id`
                         WHERE `user_sub_menu`.`menu_id`= $menuId
                         AND `user_sub_menu`.`is_active`= 1
        ";
        $submenu = $this->db->query($querySubMenu)->result_array();
        ?>
        <?php foreach ($submenu as $sm) : ?>
            <?php if ($sidebar == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
                </li>
            <?php endforeach; ?>

            <hr class="sidebar-divider my-0">
        <?php endforeach; ?>

        <!-- Nav Item - Dashboard -->

        <!-- Divider -->

        <!-- Heading -->

        <!-- Nav Item - Charts -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> -->
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('guru/keluar'); ?>" onclick="return confirm('Yakin anda keluar?');">
                <i class="fas fa-sign-out-alt fa-fw"></i>
                Keluar
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->