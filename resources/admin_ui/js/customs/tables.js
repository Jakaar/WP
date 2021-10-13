// Datatables
$(document).ready(() => {
    // const table = $('#UserPermissionTable').DataTable({});
    const table = $('#UserPermissionTable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    });
    table.on( 'order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
    $('#NewsTable').DataTable({})
    $('#BulletInBoard').DataTable({});
});
