

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
    <?php echo $__env->make('part.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    <h1 class="text-primary">Tambah Buku</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Buku</h6>
        </div>
        <div class="card-body">
            <form action="/buku" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="Judul"class="text-primary font-weight-bold"> Judul Buku</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo e(old('judul')); ?>">
                </div>

                <?php $__errorArgs = ['judul'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mb-3">
                    <label for="kode_buku"class="text-primary font-weight-bold"> Kode Buku</label>
                    <input type="text" name="kode_buku" class="form-control" value="<?php echo e(old('kode_buku')); ?>">
                </div>

                <?php $__errorArgs = ['kode_buku'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mb-3">
                    <label for="kategori" class="text-primary font-weight-bold">Kategori</label>
                    <select class="form-control" name="kategori_buku[]" id="multiselect" multiple="multiple">
                        <?php $__empty_1 = true; $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            tidak ada kategori
                        <?php endif; ?>

                    </select>
                </div>

                <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mb-3">
                    <label for="pengarang" class="text-primary font-weight-bold">Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" value="<?php echo e(old('pengarang')); ?>">
                </div>

                <?php $__errorArgs = ['pengarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mb-3">
                    <label for="penerbit" class="text-primary font-weight-bold">Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" value="<?php echo e(old('penerbit')); ?>">
                </div>

                <?php $__errorArgs = ['penerbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mb-3">
                    <label for="tahun_terbit"class="text-primary font-weight-bold">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" value="<?php echo e(old('tahun_terbit')); ?>"class="form-control">
                </div>

                <?php $__errorArgs = ['tahun_terbit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group mb-3">
                    <label for="deskripsi"class="text-primary font-weight-bold">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="2"><?php echo e(old('deskripsi')); ?></textarea>
                </div>

                <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="form-group">
                    <label for="gambar" class="text-primary font-weight-bold">Tambah Sampul Buku</label>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="gambar" value="<?php echo e(old('gambar')); ?>">
                    </div>
                </div>

                <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div class="d-flex justify-content-end">
                    <a href="/buku" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary mx-1 px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $('#multiselect').select2({
            allowClear: true
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel-perpustakaan\resources\views/buku/tambah.blade.php ENDPATH**/ ?>