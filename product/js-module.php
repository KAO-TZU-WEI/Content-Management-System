<!-- jQuery -->
<script src="../node_modules/admin-lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../node_modules/admin-lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../node_modules/admin-lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../node_modules/admin-lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../node_modules/admin-lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../node_modules/admin-lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../node_modules/admin-lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../node_modules/admin-lte/plugins/moment/moment.min.js"></script>
<script src="../node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../node_modules/admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../node_modules/admin-lte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../node_modules/admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../node_modules/admin-lte/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../node_modules/admin-lte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../node_modules/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- SweetAlert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
        //logout
        $(function() {
            $(".logout").click(function() {
                Swal.fire({
                    icon: 'warning',
                    text: '確認登出?',
                    showCloseButton: true,
                    confirmButtonColor: '#DD6B55',
                    showCancelButton: true,
                    confirmButtonText: '登出',
                    cancelButtonText: '取消'
                }).then((res) => {
                    if (res.isConfirmed) {
                        location.href = '../app/controllers/logout.php';
                    } else {
                        return false;
                    }
                })
            })
        })
    </script>