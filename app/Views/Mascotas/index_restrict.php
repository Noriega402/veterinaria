<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Mascotas</span>
    </div>
    <hr>
    <div class="container-pets">
        <div class="pets">
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
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>