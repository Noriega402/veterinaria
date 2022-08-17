<?php
$idUsuario = $usuario[0]->id_usuario;
$nick = $usuario[0]->nick;
$password = $usuario[0]->password;

$listaEmpleados = $empleado;

$idEmpleado = $dataEmpleado[0]->id_empleado;
$nombre = $dataEmpleado[0]->nombre;
$apellido = $dataEmpleado[0]->apellido;

$listaRoles = $roles;
?>
<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Actualizar Usuario</span>
    </div>
    <hr>
    <div class="container update">
        <div class="employee">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url().'/admin/updateUser'; ?>" method="POST" class="frm">
                    <p class="frm_group_id">
                        <input type="text" name="usuario" id="idUsuario" class="frm__input" required value="<?php echo $idUsuario; ?>" hidden>
                    </p>
                    <p class="frm_group_empleado">
                        <label for="idEmpleado" class="frm__label"><span>*</span> Empleado</label>
                        <select name="empleado" id="idEmpleado" class="frm__input" required>
                            <option value="<?= $idEmpleado; ?>" selected>
                                <?= $nombre." ".$apellido; ?>
                            </option>
                            <?php foreach ($listaEmpleados as $key) : ?>
                                <option value="<?= $key->id_empleado ?>">
                                    <?= $key->nombre . " " . $key->apellido; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.empleado'); ?></span>
                    </p>

                    <p class="frm_group_nick">
                        <label for="nick" class="frm__label"><span>*</span> Nick</label>
                        <input type="text" name="nick" id="nick" placeholder="Ingresa un nuevo nick" class="frm__input" required value="<?php if (!old('nick')){echo $nick;}else{echo old('nick');} ?>">
                        <span class="danger"><?= session('error.nick'); ?></span>
                    </p>

                    <p class="frm_group_password">
                        <label for="pass" class="frm__label"><span>*</span> Password</label>
                        <input type="password" name="password" id="pass" placeholder="Ingrese nueva contraseña" class="frm__input" required value="<?php if (old('password')){echo old('password');} ?>">
                        <span class="danger"><?= session('error.password'); ?></span>
                    </p>

                    <p class="frm_group_rol">
                        <label for="idRol" class="frm__label"><span>*</span> Rol</label>
                        <select name="rol" id="idRol" class="frm__input" required>
                            <option value="#" selected disabled>
                                Selecciona un rol
                            </option>
                            <?php foreach ($listaRoles as $key) : ?>
                                <option value="<?=$key->id_rol; ?>">
                                    <?= $key->descripcion; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.rol'); ?></span>
                    </p>

                    <p>
                        <?php if (session('error.password') || session('error.rol') || session('error.nick') || session('error.empleado')) : ?>
                            <span class="danger">Los campos con (*) son requeridos...</span>
                        <?php endif; ?>
                    </p>
                    <p class="frm_group_submit">
                        <input type="submit" value="Guardar" class="btn_new btn_client">
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>