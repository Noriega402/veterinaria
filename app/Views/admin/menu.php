    <div class="sidebar close">
        <div class="logo-details">
            <i class='fas fa-paw'></i>
            <span class="logo_name"> <?= session('nombre'); ?> </span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?= base_url().route_to('dashboard');?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url().route_to('calendar');?>">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="link_name">Calendario</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Calendario</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="<?= base_url().route_to('employee');?>">
                        <i class="fas fa-users"></i>
                        <span class="link_name">Empleados</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Empleados</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="<?= base_url().route_to('user');?>">
                    <i class="fas fa-id-card-alt"></i>
                    <span class="link_name">Usuarios</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Usuarios</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="<?= base_url().route_to('pets');?>">
                        <i class="fas fa-dog"></i>
                        <span class="link_name">Mascotas</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Mascotas</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="icon-link">
                    <a href="<?= base_url().route_to('client');?>">
                        <i class="fas fa-address-book"></i>
                        <span class="link_name">Clientes</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Clientes</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="http://repuestosparamotos.co/page/images/user.png" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name"> <?= session('nick'); ?> </div>
                        <div class="job"> <?= session('rol') ?></div>
                    </div>
                    <a href="<?= base_url(route_to('logout')); ?>">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>