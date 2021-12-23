$(function () {
    console.log("test");
   
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

// $(document).ready(function() {
//     $('#example').DataTable();
// });