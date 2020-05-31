$(document).ready(function() {

    var language = "https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json";


    $('#users').DataTable({
        "responsive": false,
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: 'none',
                target: ''
            }
        },

        "language": {
            "url": language
        },
        columnDefs: [
            { orderable: false, targets: -1}
        ]
    });

});
