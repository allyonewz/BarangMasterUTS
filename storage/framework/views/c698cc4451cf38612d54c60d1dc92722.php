<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Welcome!</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Selamat Datang di Project UTS Saya!</h1>
        
        <img class="img-thumbnail" style="max-width:25%; max-height:25%" src="<?php echo e(Vite::asset('resources/images/foto.jpg')); ?>" alt="image">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-dark" href="<?php echo e(route('home')); ?>">Home</a>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH D:\2GAS\SMT 6\Pemro Framework\BarangMasterUts\barang_master-uts-master\resources\views/welcome.blade.php ENDPATH**/ ?>