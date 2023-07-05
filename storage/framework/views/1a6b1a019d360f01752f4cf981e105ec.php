<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Barang Master</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="<?php echo e(route('barangs.index')); ?>">Data Barang</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Barang</h3>
            </div>
            <div class="col-lg-6">
                <a href="<?php echo e(route('barangs.create')); ?>" class="btn btn-primary float-end">Create Barang</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Satuan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($barang->kode_barang); ?></td>
                            <td><?php echo e($barang->nama_barang); ?></td>
                            <td><?php echo e($barang->harga_barang); ?></td>
                            <td><?php echo e($barang->deskripsi_barang); ?></td>
                            <td><?php echo e($barang->satuan->nama_satuan); ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?php echo e(route('barangs.edit', ['barang' => $barang->id])); ?>" class="btn btn-outline-warning btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                    <form action="<?php echo e(route('barangs.destroy', ['barang' => $barang->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-danger btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>
</html>
<?php /**PATH D:\2GAS\SMT 6\Pemro Framework\BarangMasterUts\barang_master-uts-master\resources\views/barang/index.blade.php ENDPATH**/ ?>