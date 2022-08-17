<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Empleados</span>
    </div>
    <hr>
    <div class="container-employee">
        <div class="employee">
            <div class="frm_container">
                <form action="<?= base_url(); ?>/admin/newEmployee" method="POST" class="frm">
                    <p class="frm_group_nombre">
                        <label for="name" class="frm__label">Nombres</label>
                        <input type="text" name="nombre" id="name" placeholder="Ingresa los nombres" class="frm__input" required>
                    </p>

                    <p class="frm_group_apellido">
                        <label for="surname" class="frm__label">Apellidos</label>
                        <input type="text" name="apellido" id="surname" placeholder="Ingresa los apellidos" class="frm__input" required>
                    </p>

                    <p class="frm_group_direction">
                        <label for="direction" class="frm__label">Dirección</label>
                        <input type="text" name="direccion" id="direction" placeholder="Direccion del cliente" class="frm__input" required>
                    </p>

                    <p class="frm_group_submit">
                        <input type="submit" value="Guardar" class="btn_new">
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
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($empleados as $key) : ?>
                            <tr>
                                <td><?= $key->id_empleado;?></td>
                                <td><?= $key->nombre;?></td>
                                <td><?= $key->apellido;?></td>
                                <td><?= $key->direccion;?></td>
                                <td class="acciones">
                                    <a href="<?= base_url().'/admin/getEmployee/'.$key->id_empleado; ?>" class="btn_editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url().'/admin/deleteEmployee/'.$key->id_empleado;?>" class="btn_eliminar">
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
                            <th>ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
</section>
<script>
    let mensaje = '<?= $correcto ?>';
    let editado = '<?= $editado ?>';
    if(mensaje){
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
</script>