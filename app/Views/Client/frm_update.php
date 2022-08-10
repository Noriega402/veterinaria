<?php
$id = $client[0]->id_cliente;
$name = $client[0]->nombre;
$surname = $client[0]->apellido;
$direction = $client[0]->direccion;
$phone = $client[0]->telefono;
?>
<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Actualizar Cliente</span>
    </div>
    <hr>
    <div class="container-client">
        <div class="clients update">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url().'/admin/updateClient'; ?>" method="POST" class="frm">
                    <p class="frm_group_id">
                        <input type="text" name="id" id="idCliente" class="frm__input" required value="<?php echo $id; ?>" hidden>
                    </p>
                    <p class="frm_group_nombre">
                        <label for="name" class="frm__label"><span>*</span> Nombres</label>
                        <input type="text" name="nombre" id="name" placeholder="Ingresa los nombres" class="frm__input" required value="<?php if (!old('nombre')){echo $name;}else{echo old('nombre');} ?>">
                        <span class="danger"><?= session('error.nombre'); ?></span>
                    </p>

                    <p class="frm_group_apellido">
                        <label for="surname" class="frm__label"><span>*</span> Apellidos</label>
                        <input type="text" name="apellido" id="surname" placeholder="Ingresa los apellidos" class="frm__input" required value="<?php if (!old('apellido')){echo $surname;}else{echo old('apellido');} ?>">
                        <span class="danger"><?= session('error.apellido'); ?></span>
                    </p>

                    <p class="frm_group_direction">
                        <label for="direction" class="frm__label"><span>*</span> Dirección</label>
                        <input type="text" name="direccion" id="direction" placeholder="Direccion del cliente" class="frm__input" required value="<?php if (!old('direccion')){echo $direction;}else{echo old('direccion');} ?>">
                        <span class="danger"><?= session('error.direccion'); ?></span>
                    </p>

                    <p class="frm_group_phone">
                        <label for="phone" class="frm__label">Telefono</label>
                        <input type="tel" name="telefono" id="phone" placeholder="Ej. 23456745" minlength="8" maxlength="8" pattern="[0-9]{8}" class="frm__input" value="<?php echo $phone; ?>">
                    </p>
                    <p>
                        <?php if (session('error.nombre') || session('error.apellido') || session('error.direccion')) : ?>
                            <span class="danger">Los campos con (*) son requeridos...</span>
                        <?php endif; ?>
                    </p>
                    <p class="frm_group_submit client">
                        <input type="submit" value="Guardar" class="btn_new btn_client">
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>