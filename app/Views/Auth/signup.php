<div class="login_form">
    <?php session(); ?>
    <form action="<?= base_url(); ?>/auth/signup" method="POST" class="form">
        <h1 class="form__title">Registrate</h1>

        <div class="form__div">
            <input type="text" name="nick" class="form__input" value="<?= old('nick'); ?>" autocomplete="off">
            <label for="" class="form__label">New Nick</label>
            <p class="danger"><?= session('errores.nick'); ?></p>
        </div>

        <div class="form__div">
            <input type="password" name="password" class="form__input">
            <label for="" class="form__label">New Password</label>
            <p class="danger"><?= session('errores.password'); ?></p>
        </div>

        <input type="submit" class="form__button" value="Sign Up">
        <hr>
        <div class="signin">
            <a href="<?= base_url().route_to('ingresar');?>">¿Ya estas registrado? Haz click aqui</a>
        </div>
    </form>
</div>