<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Clientes</span>
    </div>
    <hr>
    <div class="container-client">
        <div class="clients">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url() . '/admin/newClient' ?>" method="POST" class="frm">
                    <p class="frm_group_nombre">
                        <label for="name" class="frm__label"><span>*</span> Nombres</label>
                        <input type="text" name="nombre" id="name" placeholder="Ingresa los nombres" class="frm__input" required value="<?= old('nombre') ?>">
                        <span class="danger"><?= session('error.nombre'); ?></span>
                    </p>

                    <p class="frm_group_apellido">
                        <label for="surname" class="frm__label"><span>*</span> Apellidos</label>
                        <input type="text" name="apellido" id="surname" placeholder="Ingresa los apellidos" class="frm__input" required value="<?= old('apellido') ?>">
                        <span class="danger"><?= session('error.apellido'); ?></span>
                    </p>

                    <p class="frm_group_direction">
                        <label for="direction" class="frm__label"><span>*</span> Dirección</label>
                        <input type="text" name="direccion" id="direction" placeholder="Direccion del cliente" class="frm__input" required value="<?= old('direccion') ?>">
                        <span class="danger"><?= session('error.direccion'); ?></span>
                    </p>

                    <p class="frm_group_phone">
                        <label for="phone" class="frm__label">Telefono</label>
                        <input type="tel" name="telefono" id="phone" placeholder="Ej. 23456745" minlength="8" maxlength="8" pattern="[0-9]{8}" class="frm__input">
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

            <hr class="separador">

            <div class="container_table">
                <table id="mytable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>DIRECCION</th>
                            <th>TELEFONO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cliente as $key) : ?>
                            <tr>
                                <td><?= $key->id; ?></td>
                                <td><?= $key->nombre; ?></td>
                                <td><?= $key->apellido; ?></td>
                                <td><?= $key->direccion; ?></td>
                                <?php
                                if (empty($key->telefono)) {
                                    echo "<td> $key->notificacion </td>";
                                } else {
                                    echo "<td> $key->telefono </td>";
                                }
                                ?>
                                <td class="acciones">
                                    <a href="<?= base_url().'/admin/getClient/'.$key->id; ?>" class="btn_editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url().'/admin/deleteClient/'.$key->id; ?>" class="btn_eliminar" id="delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>DIRECCION</th>
                            <th>TELEFONO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</section>
<script>
    // variable $correcto viene del controlador Client.php -> funcion insertClient
    let mensaje = '<?= $correcto; ?>'
    let editado = '<?= $actualizado; ?>'
    let eliminado = '<?= $borrado; ?>'
    if (mensaje) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: `${mensaje}`,
            showConfirmButton: false,
            timer: 1500
        });
    }

    if(editado){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: `${editado}`,
            showConfirmButton: false,
            timer: 1500
        });
    }

    if(eliminado){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: `${eliminado}`,
            showConfirmButton: false,
            timer: 1500
        })
    }
</script>