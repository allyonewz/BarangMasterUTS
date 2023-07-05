<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Barang Master</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
        <div class="row text-center">
            <div class="col-lg-12">
                <h3>Biodata Mahasiswa</h3>
                <img class="img-thumbnail" style="max-height: 70%; max-width:70%" src="<?php echo e(Vite::asset('resources/images/foto2.jpg')); ?>" alt="image">
                <p class="mt-3">Muhammad Ryan Vivaldi</p>
                <p>Prodi: Sistem Informasi (2020)</p>
                <p>Hobi: Makan, Tidur</p>
            </div>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH D:\2GAS\SMT 6\Pemro Framework\BarangMasterUts\barang_master-uts-master\resources\views/home.blade.php ENDPATH**/ ?>