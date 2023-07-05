<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
<form action="<?php echo e(route('barangs.update', ['barang' => $barang->id])); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 col-xl-6">
            <div class="mb-3 text-center">
                <i class="bi-person-circle fs-1"></i>
                <h4>Edit Barang</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="KodeBarang" class="form-label">Kode Barang</label>
                    <input class="form-control <?php $__errorArgs = ['KodeBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="KodeBarang" id="KodeBarang" value="<?php echo e($errors->any() ? old('KodeBarang') : $barang->kode_barang); ?>" placeholder="Enter Kode Barang">
                    <?php $__errorArgs = ['KodeBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="NamaBarang" class="form-label">Nama Barang</label>
                    <input class="form-control <?php $__errorArgs = ['NamaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="NamaBarang" id="NamaBarang" value="<?php echo e($errors->any() ? old('NamaBarang') : $barang->nama_barang); ?>" placeholder="Enter Nama Barang">
                    <?php $__errorArgs = ['NamaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="HargaBarang" class="form-label">HargaBarang</label>
                    <input class="form-control <?php $__errorArgs = ['HargaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="HargaBarang" id="HargaBarang" value="<?php echo e($errors->any() ? old('HargaBarang') : $barang->harga_barang); ?>" placeholder="Enter HargaBarang">
                    <?php $__errorArgs = ['HargaBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="DeskripsiBarang" class="form-label">DeskripsiBarang</label>
                    <input class="form-control <?php $__errorArgs = ['DeskripsiBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="DeskripsiBarang" id="DeskripsiBarang" value="<?php echo e($errors->any() ? old('DeskripsiBarang') : $barang->deskripsi_barang); ?>" placeholder="Enter DeskripsiBarang">
                    <?php $__errorArgs = ['DeskripsiBarang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-danger"><small><?php echo e($message); ?></small></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <select name="satuan" id="satuan" class="form-select">
                        <?php
                            $selected = "";
                            if ($errors->any())
                                $selected = old('satuan');
                            else
                                $selected = $barang->satuan_id;
                        ?>
                        <?php $__currentLoopData = $satuans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $satuan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($satuan->id); ?>" <?php echo e($selected == $satuan->id ? 'selected' : ''); ?>><?php echo e($satuan->kode_satuan.' - '.$satuan->nama_satuan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 d-grid">
                    <a href="<?php echo e(route('barangs.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                </div>
                <div class="col-md-6 d-grid">
                    <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html><?php /**PATH D:\2GAS\SMT 6\Pemro Framework\BarangMasterUts\barang_master-uts-master\resources\views/barang/edit.blade.php ENDPATH**/ ?>