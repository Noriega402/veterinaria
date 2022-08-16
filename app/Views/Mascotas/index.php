<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Mascotas</span>
    </div>
    <hr>
    <div class="container-pets">
        <div class="pets">
            <?php
            // Crear una sesion para poder imprimir mostrar los errores en caso no ingresen algun valor en los inputs
            session();
            ?>
            <div class="frm_container">
                <form action="<?= base_url() . '/admin/newPet' ?>" method="POST" class="frm">
                    <p class="frm_group_nombre">
                        <label for="name" class="frm__label">Nombre</label>
                        <input type="text" name="nombre" id="name" placeholder="Ingresa nombre de mascota" class="frm__input" required value="<?= old('nombre'); ?>">
                        <span class="danger"><?= session('error.nombre'); ?></span>
                    </p>

                    <p class="frm_group_raza">
                        <label for="raza" class="frm__label">Raza</label>
                        <select name="raza" id="raza" class="frm__input" required>
                            <option value="#" disabled selected>
                                Selecciona una raza
                            </option>
                            <?php foreach ($raza as $key) : ?>
                                <option value="<?= $key->id_raza; ?>">
                                    <?= $key->nombre_raza ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.raza'); ?></span>
                    </p>

                    <p class="frm_group_sexo">
                        <label for="sexo" class="frm__label">Sexo</label>
                        <select name="sexo" id="sexo" class="frm__input" required>
                            <option value="#" disabled selected>
                                Seleccionar un sexo
                            </option>
                            <?php foreach ($sexo as $key) : ?>
                                <option value="<?= $key->id_sexo ?>">
                                    <?= $key->nombre_sexo ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.sexo'); ?></span>
                    </p>

                    <p class="frm_group_nacimiento">
                        <label for="nacimiento" class="frm__label">Fecha de nacimiento</label>
                        <input type="date" name="f_nacimiento" id="nacimiento" class="frm__input" max="<?= date("Y-m-d"); ?>">
                        <span class="danger"><?= session('error.f_nacimiento'); ?></span>
                    </p>

                    <p class="frm_group_peso">
                        <label for="peso" class="frm__label">Peso</label>
                        <input type="number" name="peso" id="peso" class="frm__input" placeholder="En libras" required>
                        <span class="danger"><?= session('error.peso'); ?></span>
                    </p>

                    <p class="frm_group_color">
                        <label for="color" class="frm__label">Color</label>
                        <input type="text" name="color" id="color" class="frm__input" placeholder="Escribe el color" required>
                        <span class="danger"><?= session('error.color'); ?></span>
                    </p>
                    <p class="frm_group_cliente">
                        <label for="cliente" class="frm__label">Dueño</label>
                        <select name="cliente" id="cliente" class="frm__input" required>
                            <option value="#" disabled selected>
                                Seleccionar Dueño
                            </option>
                            <?php foreach ($cliente as $key) : ?>
                                <option value="<?= $key->id ?>">
                                    <?= $key->nombre . " " . $key->apellido; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.cliente'); ?></span>
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
                            <th>NOMBRE</th>
                            <th>RAZA</th>
                            <th>TIPO</th>
                            <th>SEXO</th>
                            <th>NACIMIENTO</th>
                            <th>PESO</th>
                            <th>COLOR</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mascotas as $key): ?>
                            <tr>
                                <td><?= $key->id;?></td>
                                <td><?= $key->nombre;?></td>
                                <td><?= $key->raza;?></td>
                                <td><?= $key->tipo;?></td>
                                <td><?= $key->sexo;?></td>
                                <td><?= $key->f_nacimiento;?></td>
                                <td><?= $key->peso;?></td>
                                <td><?= $key->color;?></td>
                                <td class="acciones">
                                    <a href="<?= base_url().'/admin/getPet/'. $key->id?>" class="btn_editar">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url().'/admin/deletePet/'. $key->id; ?>" class="btn_eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>RAZA</th>
                            <th>TIPO</th>
                            <th>SEXO</th>
                            <th>NACIMIENTO</th>
                            <th>PESO</th>
                            <th>COLOR</th>
                            <th>ACCIONES</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>
<script>
    // variable $correcto viene del controlador Pet.php -> funcion insertPet
    let mensaje = '<?= $correcto; ?>'
    let editado = '<?= $actualizado; ?>'
    let eliminado = '<?= $eliminado; ?>'

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
        });
    }
</script>