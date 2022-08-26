<header class="header">
    <div class="logo_container">
        <i class="fas fa-paw logo_font"></i>
        <p class="logo_name">Pet World</p>
    </div>
    <nav class="nav">
        <ul class="nav_links" id="menu">
            <li class="nav_item">
                <a href="<?= base_url();?>/">
                    <i class="fas fa-home"></i>
                    Inicio
                </a>
            </li>
            <li class="nav_item">
                <a href="#">
                <i class="fas fa-phone"></i>
                    Contactanos
                </a>
            </li>
            <li class="nav_item">
                <a href="#">
                    <i class="fas fa-user-md"></i>
                    Servicios
                </a>
            </li>
            <a href="<?= base_url().route_to('ingresar');?>" class="sesion">
                <i class="fas fa-sign-in-alt"></i>
                Iniciar Sesión
            </a>
        </ul>
    </nav>
    <label id="toggle">
        <i class="fas fa-bars"></i>
    </label>
</header>