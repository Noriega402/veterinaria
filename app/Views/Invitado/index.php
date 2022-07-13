<section class="home-section">
    <div class="home-content">
        <i class='fas fa-bars'></i>
        <span class="text">Drop Down Sidebar</span>
    </div>
</section>

<script>
    let mensaje = '<?= $saludar; ?>';
    if (mensaje) {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: `Bienvenido ${mensaje}`,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>