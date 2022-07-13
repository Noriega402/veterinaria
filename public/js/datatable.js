$(document).ready(function () {
    $('#mytable').DataTable({
        // responsive: {
        //     breakpoints: [
        //         { name: 'bigdesktop', width: Infinity },
        //         { name: 'meddesktop', width: 1480 },
        //         { name: 'smalldesktop', width: 1280 },
        //         { name: 'medium', width: 1188 },
        //         { name: 'tabletl', width: 1024 },
        //         { name: 'btwtabllandp', width: 848 },
        //         { name: 'tabletp', width: 768 },
        //         { name: 'mobilel', width: 480 },
        //         { name: 'mobilep', width: 320 }
        //     ]
        // },
        responsive: true,
        "scrollY": "500px",
        "scrollCollapse": true,
        "language": {
            // "lengthMenu": "Mostrando _MENU_ por entrada",
            "lengthMenu": 'Mostrar <select>' +
                    '<option value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                '</select> de entrada',
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Sin registros disponibles",
            "emptyTable": "Aun no hay datos registrados en la tabla.",
            "infoFiltered": " (filtrado de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            // "paginate": {
            //     "first": "Primero",
            //     "last": "Ultimo",
            //     "next": "Siguiente",
            //     "previous": "Anterior"
            // },
        }
    });
});