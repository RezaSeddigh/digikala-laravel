<script src="/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/admin/src/plugins/src/mousetrap/mousetrap.min.js"></script>
<script src="/admin/src/plugins/src/waves/waves.min.js"></script>
<script src="/admin/layouts/modern-dark-menu/app.js"></script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="/admin/src/plugins/src/apex/apexcharts.min.js"></script>
<script src="/admin/src/assets/js/dashboard/dash_2.js"></script>

<!-- BEGIN SWEET ALERT SCRIPTS -->
<script src="/admin/src/plugins/src/sweetalerts2/sweetalerts2.min.js"></script>
<script src="/admin/src/plugins/src/sweetalerts2/custom-sweetalert.js"></script>
<script>
    window.addEventListener('success',function (event){
        Swal.fire({
            position: 'center',
            icon: 'success',
            title:event.detail,
            showCancelButton: false,
            timer: 1000
        })
    })
    window.addEventListener('error',function (event){
        Swal.fire({
            position: 'center',
            icon: 'error',
            title:event.detail,
            showCancelButton: false,
            timer: 2000
        })
    })
</script>
@stack('script')
