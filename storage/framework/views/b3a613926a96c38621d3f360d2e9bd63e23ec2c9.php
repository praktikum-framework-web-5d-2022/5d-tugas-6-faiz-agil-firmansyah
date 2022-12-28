<?php $__env->startSection('title','Rental Mobil'); ?>
<?php $__env->startSection('menu','active'); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .bg-maroon {
            background-color: maroon;
            color: white;
        }
        .text-maroon {
            color: maroon;
            font-weight: bold
        }
    </style>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h2>Data Konsumen</h2>
                    <a href="<?php echo e(route('konsumen.create')); ?>" class="btn bg-maroon">Tambah</a>
                </div>
                <p>Dibawah ini merupakan data semua Konsumen</p>
                <?php if(session()->has('message')): ?>
                    <div class="my-3">
                        <div class="alert alert-success">
                            <?php echo e(session()->get('message')); ?>

                        </div>
                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-bordered" align="center">
                        <thead>
                            <tr align="center">
                                <th align="center" class="align-middle" rowspan="2">#</th>
                                <th align="center" class="align-middle" rowspan="2">Nama Konsumen</th>
                                <th align="center" class="align-middle" rowspan="2">Nomor Hp</th>
                                <th align="center" class="align-middle" rowspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $konsumens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $konsumen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td align="center"><?php echo e($loop->iteration); ?></td>
                                    <td align="center"><?php echo e($konsumen->nama); ?></td>
                                    <td align="center"><?php echo e($konsumen->no_hp); ?></td>
                                    <td align="center "class="text-center">
                                        <form action="<?php echo e(route('konsumen.destroy',$konsumen->id)); ?>" method="POST">
                                            <a href="<?php echo e(route('konsumen.edit',$konsumen->id)); ?>" class="btn btn-warning">Edit</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <td colspan="11">Tidak ada data...</td>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\src\tugas6\resources\views/konsumen/index.blade.php ENDPATH**/ ?>