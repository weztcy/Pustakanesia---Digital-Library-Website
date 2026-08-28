

<?php $__env->startSection('topbar'); ?>
    <?php echo $__env->make('part.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
<h1 class="text-primary"><?php echo e($buku->judul); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="content m-4">
        <?php if($buku->gambar !=null): ?>
        <img class="img mb-3" src="<?php echo e(asset('/images/'.$buku->gambar)); ?>"style="height:200px;width:200px">
        <?php else: ?>
        <img class="img mb-3" src="<?php echo e(asset('/images/noImage.jpg')); ?>"style="height:200px;width:200px">
        <?php endif; ?>
        <h5 class="pengarang">Pengarang : <a href="#" class="text-primary" style="text-decoration: none"><?php echo e($buku->pengarang); ?></a></h5>
        <h5 class="penerbit">Penerbit : <a href="#" class="text-primary" style="text-decoration: none"><?php echo e($buku->penerbit); ?></a></h5>
        <h5 class="tahun_terbit">Tahun Terbit : <a href="#" class="text-primary" style="text-decoration: none"><?php echo e($buku->tahun_terbit); ?></a></h5>
        <h5 class="deskripsi">Deskripsi : <br><p class="deskripsi mt-2" style="text-align:justify; text-justify:inter-word; text-indent:1rem; letter-spacing:.1rem; word-spacing:.1rem"><?php echo e($buku->deskripsi); ?></p></h5>
        <a href="/buku" class="btn btn-primary">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel-perpustakaan\resources\views/buku/detail.blade.php ENDPATH**/ ?>