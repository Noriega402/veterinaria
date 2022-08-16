<?php
$id = $pet[0]->id_mascota;
$name = $pet[0]->nombre_mascota;
$raza = $raza[0]->nombre_raza;
$sexo = $pet[0]->sexo;
$nacimiento = $pet[0]->f_nacimiento;
$peso = $pet[0]->peso;
$color = $pet[0]->color;
$idCliente = $dataClient[0]->id_cliente;
$nombreCliente = $dataClient[0]->nombre;
$apellidoCliente = $dataClient[0]->apellido;
$listaClientes = $allClient;
?>
<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Actualizar Mascota</span>
    </div>
    <hr>
    <div class="container-pet">
        <div class="pet update">
            <?php session(); ?>
            <div class="frm_container">
                <form action="<?= base_url().'/admin/updatePet'; ?>" method="POST" class="frm_update">
                    <p class="frm_group_id">
                        <input type="text" name="id" id="idMascota" class="frm__input" required value="<?php echo $id; ?>" hidden>
                    </p>

                    <p class="frm_group_raza">
                        <label for="Raza" class="frm__label">Raza</label>
                        <input type="text" name="raza" id="raza" placeholder="Escribe el color" class="frm__input" required value="<?= $raza; ?>" disabled>
                    </p>

                    <p class="frm_group_nombre">
                        <label for="name" class="frm__label"><span>*</span> Nombre</label>
                        <input type="text" name="nombre" id="name" placeholder="Ingresa los nombres" class="frm__input" required value="<?php if (!old('nombre')){echo $name;}else{echo old('nombre');} ?>">
                        <span class="danger"><?= session('error.nombre'); ?></span>
                    </p>

                    <p class="frm_group_nacimiento">
                        <label for="nacimiento" class="frm__label">Fecha de nacimiento</label>
                        <input type="date" name="f_nacimiento" id="nacimiento" class="frm__input" max="<?= date("Y-m-d"); ?>" value="<?= $nacimiento; ?>">
                        <span class="danger"><?= session('error.f_nacimiento'); ?></span>
                    </p>

                    <p class="frm_group_peso">
                        <label for="peso" class="frm__label">Peso</label>
                        <input type="text" name="peso" id="peso" placeholder="Ingresa el peso en libras" class="frm__input" required value="<?php if (!old('peso')){echo $peso;}else{echo old('peso');} ?>">
                        <span class="danger"><?= session('error.peso'); ?></span>
                    </p>

                    <p class="frm_group_color">
                        <label for="color" class="frm__label">Color</label>
                        <input type="text" name="color" id="color" placeholder="Escribe el color" class="frm__input" required value="<?php if (!old('color')){echo $color;}else{echo old('color');} ?>">
                        <span class="danger"><?= session('error.color'); ?></span>
                    </p>

                    <p class="frm_group_cliente">
                        <label for="cliente" class="frm__label">Dueño</label>
                        <select name="cliente" id="cliente" class="frm__input" required>
                            <option value="<?= $idCliente; ?>" selected>
                                <?= $nombreCliente." ".$apellidoCliente; ?>
                            </option>
                            <?php foreach ($listaClientes as $key) : ?>
                                <option value="<?= $key->id ?>">
                                    <?= $key->nombre . " " . $key->apellido; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="danger"><?= session('error.cliente'); ?></span>
                    </p>

                    <p>
                        <?php if (session('error.nombre') || session('error.f_nacimiento') || session('error.peso') || session('error.color')) : ?>
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