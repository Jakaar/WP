// Datatables
$(document).ready(() => {
  $('#UserPermissionTable').DataTable({
      ajax: {
          url: '/cms/GetUsers',
      },

  });
});
