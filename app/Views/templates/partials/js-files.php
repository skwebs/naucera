<!-- jQuery -->
<script src="<?= base_url("assets/static") ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url("assets/static") ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url("assets/static") ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url("assets/static") ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE -->
<script src="<?= base_url("assets/static") ?>/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!-- <script src="<?= base_url("assets/static") ?>/plugins/chart.js/Chart.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/static") ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?= base_url("assets/static") ?>/dist/js/pages/dashboard3.js"></script> -->
<!-- Page specific script -->
<script>
   $(function() {
      $("#example1").DataTable({
         "responsive": true,
         "lengthChange": false,
         "autoWidth": false,
         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      // $('#example2').DataTable({
      //    "paging": true,
      //    "lengthChange": false,
      //    "searching": false,
      //    "ordering": true,
      //    "info": true,
      //    "autoWidth": false,
      //    "responsive": true,
      // });
   });
</script>