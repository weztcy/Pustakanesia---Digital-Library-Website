

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
    <?php echo $__env->make('part.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Profile</h4>
        </div>
        <div class="row">
            <div class="col-auto ml-5 mr-5 my-4">
                <?php if($profile->photoProfile != null): ?>
                    <img src="<?php echo e(asset('/images/photoProfile/' . $profile->photoProfile)); ?>"
                        style="width:150px;height:150px;border-radius:100px">
                <?php else: ?>
                    <img src="<?php echo e(asset('template/img/boy.png')); ?>" style="width:100px;height:100px;border-radius:50px">
                <?php endif; ?>
            </div>
            <div class="col-auto mx-4">
                <div class="form-group mb-3">
                    <label for="nama" class="text-lg text-primary font-weight-bold">Nama Lengkap</label>
                    <h4><?php echo e($profile->user->name); ?></h4>
                </div>

                <div class="form-group mb-3">
                    <label for="npm" class="text-lg text-primary font-weight-bold">Nomor Induk Mahasiswa</label>
                    <h4><?php echo e($profile->npm); ?></h4>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi" class="text-lg text-primary font-weight-bold">Program Studi</label>
                    <h4><?php echo e($profile->prodi); ?></h4>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi" class="text-lg text-primary font-weight-bold">Alamat</label>
                    <h4><?php echo e($profile->alamat); ?></h4>
                </div>

                <div class="form-group mb-3">
                    <label for="prodi" class="text-lg text-primary font-weight-bold">Nomor Telephone</label>
                    <h4><?php echo e($profile->noTelp); ?></h4>
                </div>

            </div>
        </div>
        <div class="edit d-flex justify-content-end my-4 mx-4">
            <a href="/profile/<?php echo e($profile->id); ?>/edit" class="btn btn-primary px-5">Edit Profile</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel-perpustakaan\resources\views/profile/tampil.blade.php ENDPATH**/ ?>