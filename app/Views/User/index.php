<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Usuarios</span>
    </div>
    <hr>
    <div class="container-employee">
        <div class="employee">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url(); ?>/admin/newUser" method="POST" class="frm">

                    <p class="frm_group_empleado">
                        <label for="employee" class="frm__label">Empleado</label>
                        <select name="id_empleado" id="employee" class="frm__input">
                            <?php foreach ($employee as $key) : ?>
                                <option value="<?= $key->id_empleado ?>">
                                    <?php echo $key->nombre . " " . $key->apellido; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </p>

                    <p class="frm_group_nick">
                        <label for="Nick" class="frm__label">Nick</label>
                        <input type="text" name="nick" id="Nick" placeholder="Ingresa tu alias" class="frm__input" required value="<?= old('nick'); ?>">
                        <span class="danger"><?= session('error.nick'); ?></span>
                    </p>

                    <p class="frm_group_password">
                        <label for="Password" class="frm__label">Password</label>
                        <input type="password" name="password" id="Password" placeholder="Ingresa tu contraseña" class="frm__input" required>
                        <span class="container_show_password" id="showPassword">
                            <i class="fa-solid fa-eye" id="icon_password"></i>
                        </span>
                        <span class="danger"><?= session('error.password'); ?></span>
                    </p>

                    <p class="frm_group_rol">
                        <label for="Rol" class="frm__label">Rol</label>
                        <select name="id_rol" id="Rol" class="frm__input">
                            <option value="#" selected disabled>Selecciona un rol</option>
                            <?php foreach ($rol as $key) : ?>
                                <option value="<?= $key->id_rol ?>">
                                    <?= $key->descripcion ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </p>

                    <p class="frm_group_submit">
                        <input type="submit" value="Agregar" class="btn_new">
                    </p>
                </form>
            </div>

            <hr class="separador">

            <div class="container_table">
                <table id="mytable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NICK</th>
                            <th>NOMBRE COMPLETO</th>
                            <th>ROL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user as $key) : ?>
                            <tr>
                                <td><?= $key->id; ?></td>
                                <td><?= $key->nick; ?></td>
                                <td><?= $key->nombre_completo; ?></td>
                                <td><?= $key->rol; ?></td>
                                <td class="acciones">
                                    <a href="<?= base_url().'/admin/getUser/'.$key->id;?>" class="btn_editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn_eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NICK</th>
                            <th>NOMBRE COMPLETO</th>
                            <th>ROL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
</section>
<script>
    let mensaje = '<?= $correcto ?>';
    if(mensaje){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: `${mensaje}`,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>