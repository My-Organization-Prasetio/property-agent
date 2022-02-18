// Initialize module
// ------------------------------
var requestArchive = function () {
    // Setup initTableArchive
    var _initTableArchive = function() {
        // Initialize
        $('.invoice-archive').DataTable({
            autoWidth: false,
            columnDefs: [
                {
                    width: 30,
                    targets: 0
                },
                {
                    visible: false,
                    targets: 1
                },
                { 
                    orderable: false,
                    width: 120,
                    targets: 7
                },
                {
                    width: '15%',
                    targets: [4, 5]
                },
                {
                    width: '15%',
                    targets: 6
                },
                {
                    width: '15%',
                    targets: 3
                }
            ],
            order: [[ 0, 'desc' ]],
            dom: '<"datatable-header"fl><"datatable-scroll-lg"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            },
            lengthMenu: [ 25, 50, 75, 100 ],
            displayLength: 25,
            drawCallback: function ( settings ) {
                var api = this.api();
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;
     
                api.column(1, {page:'current'} ).data().each( function ( group, i ) {
                    if ( last !== group ) {
                        $(rows).eq( i ).before(
                            '<tr class="table-active table-border-double"><td colspan="8" class="font-weight-semibold">'+group+'</td></tr>'
                        );
     
                        last = group;
                    }
                });

                // Initializw Select2
                if (!$().select2) {
                    console.warn('Warning - select2.min.js is not loaded.');
                    return;
                }
                $('.form-control-select2').select2({
                    width: 150,
                    minimumResultsForSearch: Infinity
                });
            }
        });
    
};

    return {
        initComponents: function() {
            _initTableArchive();
        }
    }
}();

document.addEventListener('DOMContentLoaded', function() {
    requestArchive.initComponents();
});