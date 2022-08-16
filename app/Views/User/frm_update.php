<?php
// $id = $client[0]->id_cliente;
// $name = $client[0]->nombre;
// $surname = $client[0]->apellido;
// $direction = $client[0]->direccion;
// $phone = $client[0]->telefono;
?>
<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Actualizar Usuario</span>
    </div>
    <hr>
    <div class="container-client">
        <div class="clients update">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url().'/admin/updateUser'; ?>" method="POST" class="frm">
                    <p class="frm_group_id">
                        <input type="text" name="id" id="idCliente" class="frm__input" required value="<?php echo $id; ?>" hidden>
                    </p>
                    <p class="frm_group_cliente">
                        <label for="cliente" class="frm__label">Empleado</label>
                        <select name="cliente" id="cliente" class="frm__input" required>
                            <option value="<?= $idEmpleado; ?>" selected>
                                <?= $nombreCliente." ".$apellidoCliente; ?>
                            </option>
                            <?php foreach ($listaEmpleados as $key) : ?>
                                <option value="<?= $key->id ?>">
                                    <?= $key->nombre . " " . $key->apellido; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.cliente'); ?></span>
                    </p>

                    <p class="frm_group_apellido">
                        <label for="nick" class="frm__label"><span>*</span> Nick</label>
                        <input type="text" name="nick" id="nick" placeholder="Ingresa un nuevo nick" class="frm__input" required value="<?php if (!old('nick')){echo $nick;}else{echo old('nick');} ?>">
                        <span class="danger"><?= session('error.nick'); ?></span>
                    </p>

                    <p class="frm_group_direction">
                        <label for="pass" class="frm__label"><span>*</span> Password</label>
                        <input type="text" name="password" id="pass" placeholder="Ingrese nueva contraseña" class="frm__input" required value="<?php if (!old('direccion')){echo $direction;}else{echo old('direccion');} ?>">
                        <span class="danger"><?= session('error.direccion'); ?></span>
                    </p>

                    <p class="frm_group_cliente">
                        <label for="rol" class="frm__label">Rol</label>
                        <select name="rol" id="rol" class="frm__input" required>
                            <option value="<?= $idRol; ?>" selected>
                                <?= $descripcion; ?>
                            </option>
                            <?php foreach ($listaRoles as $key) : ?>
                                <option value="<?= $key->id ?>">
                                    <?= $key->descripcion; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.cliente'); ?></span>
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