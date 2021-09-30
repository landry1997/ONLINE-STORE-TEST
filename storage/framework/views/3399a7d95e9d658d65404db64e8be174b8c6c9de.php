<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title><?php echo e(__('Acceuil')); ?> || Adisa</title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid">
            <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
                <a href="<?php echo e(route('login')); ?>" class="pt-lg-20 mb-12">
                    <img alt="Logo" src="<?php echo e(asset('logo.png')); ?>" class="h-100px" />
                </a>
                <div class="text-center">
                    <h1 class="fw-bolder fs-2qx text-dark mb-7"><?php echo e(__('Bienvenue sur Adisa BO')); ?></h1>
                    <div class="fw-bold fs-2 text-gray-400 mb-15"><?php echo e(__('Administrez plus facilement')); ?></div>
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-lg btn-primary"><?php echo e(__('Se connecter')); ?></a>
                </div>
            </div>
            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-250px" style="background-image: url(../../assets/media/illustrations/sigma-1/7.png)"></div>
        </div>
    </div>
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
</body>
</html><?php /**PATH C:\Users\Sipoufo\Documents\Projects\ADISA-BO\resources\views/welcome.blade.php ENDPATH**/ ?>