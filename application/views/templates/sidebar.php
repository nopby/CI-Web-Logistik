    
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <?php $url = $this->session->userdata('url') ?>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url($url);?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-truck"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Exprezz <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query Menu -->
    <?php 
        $level = $this->session->userdata('level');
        $queryMenu = "SELECT `user_menu`.`id`,`menu`
                        FROM `user_menu` JOIN `user_access_menu`
                        ON `user_menu`.id = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`level`= $level
                        ORDER BY `user_access_menu`.`menu_id` ASC
        ";
        $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- Loop -->
    <?php foreach($menu as $i): ?>
        <div class="sidebar-heading">
            <?= $i['menu'] ?>
        </div>
        <?php 
            $menuId = $i['id'];
            $querySubMenu = "SELECT *
                                FROM `user_sub_menu` JOIN `user_menu`
                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array(); 
        ?>
        <?php foreach($subMenu as $j): ?>
            <?php if($title == $j['title']): ?>
                <li class="nav-item active">
            <?php else:?>
                <li class="nav-item">
            <?php endif; ?>
                    <a class="nav-link" href="<?= base_url($j['url'])?>">
                        <i class="<?= $j['icon'] ?>"></i>
                        <span><?= $j['title'] ?></span>
                    </a>
                </li>
        <?php endforeach ?>
            <hr class="sidebar-divider">
    <?php endforeach ?>


    <!-- Divider -->
    



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->