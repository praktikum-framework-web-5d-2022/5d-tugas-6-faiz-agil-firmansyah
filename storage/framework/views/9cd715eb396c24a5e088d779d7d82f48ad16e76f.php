<?php $__env->startSection('title','Data Tidak Ditemukan'); ?>


<?php $__env->startSection('content'); ?>
<style>
    .bg-maroon {
        background-color: maroon;
        color: white;
    }
</style>
<div class="container fluid text-center mt-3 p-4 bg-white">
    <h1 class="alert alert-danger">Halaman Tidak Ditemukan!</h1>
    <P>Tekan tombol kembali untuk menuju ke halaman utama.</p>
    <a href="/" class="btn bg-maroon" role="button" aria-pressed="true">Kembali</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas6\resources\views/fail.blade.php ENDPATH**/ ?>