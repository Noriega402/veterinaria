<div class="login_form">
    <?php session(); ?>
    <form action="<?= base_url(); ?>/auth/signin" method="POST" class="form">
        <h1 class="form__title">Ingreso al Sistema</h1>

        <div class="form__div">
            <input type="text" name="nick" class="form__input" value="<?= old('nick'); ?>" autocomplete="off">
            <label for="" class="form__label">Nick</label>
            <p class="danger"><?= session('errores.nick'); ?></p>
        </div>

        <div class="form__div">
            <input type="password" name="password" class="form__input">
            <label for="" class="form__label">Password</label>
            <p class="danger"><?= session('errores.password'); ?></p>
        </div>

        <!-- #SI ALGO LOS DATOS SON INCORRECTOS MOSTRAR MENSAJE -->
        <?php if(session('message')):?>
            <div class="error">
                <p><?= session('message.error');?></p>
            </div>
        <?php endif; ?>

        <!-- SI NO HAY SESION INICIADA Y QUIERE INGRESAR A UNA DIRECCION SIN INICIO DE SESION MOSTRAR MENSAJE DE ERROR -->
        <?php if(session('warning')):?>
            <div class="error">
                <p><?= session('warning');?></p>
            </div>
        <?php endif; ?>

        <input type="submit" class="form__button" value="Sign In">
        <hr>
        <div class="signin">
            <a href="#">¿Aun no estas registrado? Haz click aqui</a>
        </div>
    </form>
</div>