<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Dasboard</span>
    </div>

    <div class="flex">
        <div class="box calendar">
            <div class="box-icon">
                <i class="fas fa-calendar-alt icon"></i>
            </div>
            <p class="title">Fecha Actual</p>
            <p class="response">
                <?php $fechaActual = date('d-M-Y');
                echo $fechaActual; ?>
            </p>
            <hr>
            <span>
                <i class="fas fa-calendar-alt icon-sm"></i> <?= $fechaActual; ?>
            </span>
        </div>

        <div class="box dates">
            <div class="box-icon">
                <i class="fas fa-calendar-day icon"></i>
            </div>
            <p class="title">Citas</p>
            <p class="response">0</p>
            <hr>
            <span>
                <i class="fas fa-calendar-day icon-sm"></i> Citas Totales
            </span>
        </div>

        <div class="box registers">
            <div class="box-icon">
                <i class="fas fa-address-card icon"></i>
            </div>
            <p class="title">Clientes</p>
            <p class="response">10</p>
            <hr>
            <span>
                <i class="fas fa-address-card icon-sm"></i> Clientes Registrados
            </span>
        </div>

        <div class="box veterinary">
            <div class="box-icon">
                <i class="fas fa-user-md icon"></i>
            </div>
            <p class="title">Veterinarios</p>
            <p class="response">2</p>
            <hr>
            <span>
                <i class="fas fa-user-md icon-sm"></i> Veterinarios Actuales
            </span>
        </div>

        <div class="box pets">
            <div class="box-icon">
                <i class="fas fa-dog icon"></i>
            </div>
            <p class="title">Mascotas</p>
            <p class="response">26</p>
            <hr>
            <span>
                <i class="fas fa-dog icon-sm"></i> Mascotas Registradas
            </span>
        </div>

        <div class="box inventory">
            <div class="box-icon">
                <i class="fas fa-boxes icon"></i>
            </div>
            <p class="title">Productos</p>
            <p class="response">26</p>
            <hr>
            <span>
                <i class="fas fa-boxes icon-sm"></i> Productos Registrados
            </span>
        </div>

        <div class="box users">
            <div class="box-icon">
                <i class="fas fa-users icon"></i>
            </div>
            <p class="title">Usuarios</p>
            <p class="response">4</p>
            <hr>
            <span>
                <i class="fas fa-users icon-sm"></i> Usuarios Actuales
            </span>
        </div>

        <div class="box suppliers">
            <div class="box-icon">
                <i class="fas fa-truck-moving icon"></i>
            </div>
            <p class="title">Proveedores</p>
            <p class="response">8</p>
            <hr>
            <span>
                <i class="fas fa-truck-moving icon-sm"></i> Proveedores Actuales
            </span>
        </div>
    </div>
</section>

<script>
    // Ejemplo
    /* Swal.fire('Esto es una alerta')
        .then(() =>{
            console.log('Se cerro la alerta');
        }); */

    // Bienvenida
    let mensaje = '<?= $saludar; ?>';
    if (mensaje) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: `Bienvenido ${mensaje}`,
            showConfirmButton: false,
            timer: 1500
        });
    }
    /* else{
        Swal.fire('error','No hay nombre de usuario','error');
    } */
</script>