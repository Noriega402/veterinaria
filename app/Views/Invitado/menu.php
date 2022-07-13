<div class="sidebar close">
    <div class="logo-details">
        <i class='fas fa-paw'></i>
        <span class="logo_name"> <?= session('nombre'); ?> </span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class="fas fa-calendar-alt"></i>
                <span class="link_name">Calendario</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Calendario</a></li>
            </ul>
        </li>
        <li>
            <div class="iocn-link">
                <a href="#">
                    <i class="fas fa-address-card"></i>
                    <span class="link_name">Registros</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Registros</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Mascotas</a></li>
                <li><a href="#">Otros</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="far fa-compass"></i>
                <span class="link_name">Ubicación</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Ubicación</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-cog"></i>
                <span class="link_name">Configuración</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Configuración</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="https://cdn.icon-icons.com/icons2/1154/PNG/512/1486564400-account_81513.png" alt="profileImg">
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
