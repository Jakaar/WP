// Datatables
$(document).ready(() => {
  $('#UserPermissionTable').DataTable({
      ajax: '/cms/settings/GetUsers',
      // "columns" : [
      //     {"data":"asd"},
      //     {"data":"asd"},
      //     {"data":"asd"},
      //     {"data":"asd"},
      //     {"data":"asd"},
      //     {"data":"asd"},
      //     {"data":"asd"},
      //     {"data":"asd"}
      //     ]
  });
  //   const table = $('#UserPermissionTable').DataTable({
  //       ajax: {
  //           url : "/cms/settings/GetUsers",
  //           dataSrc: 'responseData'
  //       },
  //
  //   });
  //
  //   table.on( 'xhr', function () {
  //       const json = table.ajax.json();
  //       console.log(json)
  //   });
});
