<?php
    $id = $employee[0]->id_empleado;
    $names = $employee[0]->nombre;
    $surnames = $employee[0]->apellido;
    $direction = $employee[0]->direccion;
?>
<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Actualizar Empleado</span>
    </div>
    <hr>
    <div class="container">
        <div class="employee update">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url().'/admin/updateEmployee'; ?>" method="POST" class="frm_update">
                    <p class="frm_group_id">
                        <input type="text" name="id" id="idEmpleado" class="frm__input" required value="<?php echo $id; ?>" hidden>
                    </p>

                    <p class="frm_group_nombre">
                        <label for="name" class="frm__label"><span>*</span> Nombres</label>
                        <input type="text" name="nombre" id="name" placeholder="Ingresa los nombres" class="frm__input" required value="<?php if (!old('nombre')){echo $names;}else{echo old('nombre');} ?>">
                        <span class="danger"><?= session('error.nombre'); ?></span>
                    </p>

                    <p class="frm_group_apellido">
                        <label for="surname" class="frm__label"><span>*</span> Apellidos</label>
                        <input type="text" name="apellido" id="surname" placeholder="Ingresa los apellidos" class="frm__input" required value="<?php if (!old('apellido')){echo $surnames;}else{echo old('apellido');} ?>">
                        <span class="danger"><?= session('error.apellido'); ?></span>
                    </p>

                    <p class="frm_group_color">
                        <label for="direccion" class="frm__label"><span>*</span> Dirección</label>
                        <input type="text" name="direccion" id="direccion" placeholder="Direccion del empleado" class="frm__input" required value="<?php if (!old('direccion')){echo $direction;}else{echo old('direccion');} ?>">
                        <span class="danger"><?= session('error.direccion'); ?></span>
                    </p>

                    <p>
                        <?php if (session('error.nombre') || session('error.apellido') || session('error.direccion') ): ?>
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