

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('topbar'); ?>
    <?php echo $__env->make('part.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    <h1 class="text-primary">Daftar Buku</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()->isAdmin == 1): ?>
        <a href="/buku/create" class="btn btn-info mb-3">Tambah Buku</a>
    <?php endif; ?>

    <form class="navbar-search mb-3" action="/buku" method="GET">
        <div class="input-group">
            <input type="search" name="search" class="form-control bg-light border-1 small" placeholder="Cari Judul Buku"
                aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <div class="card container-fluid mb-3">

        <div class="row d-flex flex-wrap justify-content-center">

            <?php $__empty_1 = true; $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-auto my-2" style="width:18rem;">
                    <div class="card mx-2 my-2" style="min-height:28rem;">
                        <?php if($item->gambar != null): ?>
                            <img class="card-img-top" style="max-height:180px;" src="<?php echo e(asset('/images/' . $item->gambar)); ?>">
                        <?php else: ?>
                            <img class="card-img-top" style="height:200px;" src="<?php echo e(asset('/images/noImage.jpg')); ?>">
                        <?php endif; ?>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div class="detai-buku">
                                <h5 class="card-title text-primary"><a
                                        href="/buku/<?php echo e($item->id); ?>"style="text-decoration: none; font-size:1rem;font-weight:bold;">
                                        <?php echo e($item->judul); ?></a></h5>
                                <p class = "cart-text m-0">Kode Buku : <?php echo e($item->kode_buku); ?></p>
                                <p class="card-text m-0">Pengarang : <a href="#"
                                        style="text-decoration: none;"><?php echo e($item->pengarang); ?></a></p>
                                <p class="card-text m-0">Kategori : </p>
                                <p class="text-primary">
                                    <?php $__currentLoopData = $item->kategori_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($kategori->nama,); ?>,
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                                <p class="card-text m-0">Status : <?php echo e($item->status); ?></p>
                            </div>
                            <?php if(Auth::user()->isAdmin == 1): ?>
                                <div class="button-area">
                                    <button class="btn-sm btn-info px-2"><a href="/buku/<?php echo e($item->id); ?>"
                                            style="text-decoration: none; color:white;">Detail</a></button>
                                    <button class="btn-sm btn-warning px-2"><a href="/buku/<?php echo e($item->id); ?>/edit"
                                            style="text-decoration: none;color:white">Edit</a></button>
                                    <button class="btn-sm btn-danger px-3"><a data-toggle="modal"
                                            data-target="#DeleteModal<?php echo e($item->id); ?>">Delete</a></button>
                                </div>
                            <?php endif; ?>

                            <?php if(Auth::user()->isAdmin == 0): ?>
                                <div class="button-area">
                                    <button class="btn-sm btn-info px-2"> <a href="/buku/<?php echo e($item->id); ?>"
                                    style="text-decoration: none; color:white;">Detail</a></button>
                                    <button class="btn-sm btn-danger px-4"><a a href="/peminjaman/create"
                                    style="text-decoration: none; color:white;">Pinjam Buku</a></button>
                                </div>
                            <?php endif; ?>

                            <!--Delete Modal -->
                            <div class="modal fade" id="DeleteModal<?php echo e($item->id); ?>" tabindex="-1" role="dialog"
                                aria-labelledby="ModalLabelDelete" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabelDelete">Ohh No!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary"
                                                data-dismiss="modal">Cancel</button>
                                            <form action="/buku/<?php echo e($item->id); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('delete'); ?>
                                                <button class="btn btn-outline-danger px-4" type="submit"
                                                    value="delete">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h1 class="text-primary mt-3">Tidak ada buku</h1>
            <?php endif; ?>

        </div>

        <div class="d-flex justify-content-between mx-2 my-2">
            <p class="text-primary my-2">Menampilkan <?php echo e($buku->currentPage()); ?> dari <?php echo e($buku->lastPage()); ?> Halaman</p>

            <?php echo e($buku->links()); ?>

        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel-perpustakaan\resources\views/buku/tampil.blade.php ENDPATH**/ ?>