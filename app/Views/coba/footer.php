<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Punyakku</strong>
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=<?php echo base_url() . "/aset/plugins/jquery/jquery.min.js"; ?>></script>
<!-- jQuery UI 1.11.4 -->
<script src=<?php echo base_url() . "/aset/plugins/jquery-ui/jquery-ui.min.js"; ?>></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src=<?php echo base_url() . "/aset/plugins/bootstrap/js/bootstrap.bundle.min.js"; ?>></script>
<!-- ChartJS -->
<script src=<?php echo base_url() . "/aset/plugins/chart.js/Chart.min.js"; ?>></script>
<!-- Sparkline -->
<script src=<?php echo base_url() . "/aset/plugins/sparklines/sparkline.js"; ?>></script>
<!-- JQVMap -->
<script src=<?php echo base_url() . "/aset/plugins/jqvmap/jquery.vmap.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/jqvmap/maps/jquery.vmap.usa.js"; ?>></script>
<!-- jQuery Knob Chart -->
<script src=<?php echo base_url() . "/aset/plugins/jquery-knob/jquery.knob.min.js"; ?>></script>
<!-- daterangepicker -->
<script src=<?php echo base_url() . "/aset/plugins/moment/moment.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/daterangepicker/daterangepicker.js"; ?>></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=<?php echo base_url() . "/aset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"; ?>></script>
<!-- overlayScrollbars -->
<script src=<?php echo base_url() . "/aset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"; ?>></script>
<!-- AdminLTE App -->
<script src=<?php echo base_url() . "/aset/dist/js/adminlte.js"; ?>></script>

<!-- DataTables  & Plugins -->
<script src=<?php echo base_url() . "/aset/plugins/datatables/jquery.dataTables.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-responsive/js/dataTables.responsive.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-buttons/js/dataTables.buttons.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/jszip/jszip.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/pdfmake/pdfmake.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/pdfmake/vfs_fonts.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-buttons/js/buttons.html5.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-buttons/js/buttons.print.min.js"; ?>></script>
<script src=<?php echo base_url() . "/aset/plugins/datatables-buttons/js/buttons.colVis.min.js"; ?>></script>

<!-- Page specific script -->


<!-- Summernote -->
<script src=<?php echo base_url() . "/aset/plugins/summernote/summernote-bs4.min.js"; ?>></script>
<script>
  $(function() {
    // Summernote
    $('.summernote').summernote(),

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
  })
</script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>

</html>