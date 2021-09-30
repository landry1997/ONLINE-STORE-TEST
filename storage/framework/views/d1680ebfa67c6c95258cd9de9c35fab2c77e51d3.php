<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title><?php echo e(__('Connexion au tableau de bord')); ?> || Adisa</title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-500px positon-xl-relative">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-15">
                        <a href="#" class="py-9 pt-lg-15">
                            <img alt="Logo" src="<?php echo e(asset('logo.png')); ?>" class="h-100px" />
                        </a>
                        <h1 class="fw-bolder text-primary fs-2qx pb-5 pb-md-10"><?php echo e(__('Bienvenue sur Adisa')); ?></h1>
                        <p class="fw-bold fs-2 text-primary"><?php echo e(__('Planifier la gestion de la plate-forme')); ?>

                            <br /><?php echo e(__('de e-learning')); ?></p>
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-70px min-h-lg-200px" style="background-image: url(../assets/media/illustrations/sigma-1/17.png)"></div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-15">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-600px p-12 p-lg-15 mx-auto">
                        <form class="form w-100" id="kt_sign_in_form" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="text-center mb-10">
                                <h1 class="text-dark mb-5"><?php echo e(__('Connectez vous à votre compte')); ?></h1>
                            </div>
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark"><?php echo e(__('Nom')); ?></label>
                                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" class="form-control form-control-lg form-control-solid <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Entrez votre nom')); ?>">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0"><?php echo e(__('Mot de passe')); ?></label>
                                    <a href="<?php echo e(route('password.request')); ?>" class="link-primary fs-6 fw-bolder"><?php echo e(__('Mot de passe oublié')); ?> ?</a>
                                </div>
                                <input class="form-control form-control-lg form-control-solid <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="<?php echo e(__('Mot de passe')); ?>" id="password" value="<?php echo e(old('password')); ?>" type="password" name="password" autocomplete="off" />
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="text-center">
                                
                                <button type="submit" class="btn btn-lg btn-dark fw-bolder me-3 my-2">
                                    <span class="indicator-label"><?php echo e(__('Connexion')); ?></span>
                                    <span class="indicator-progress"><?php echo e(__('Veuillez patienter')); ?>...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <a href="#" class="btn btn-light-primary btn-lg fw-bolder my-2">
                                    <img alt="Logo" src="../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" /><?php echo e(__('Connexion avec Google')); ?></a>
                            </div>
                        </form>
                    </div>
                </div>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <script src="../assets/js/custom/authentication/sign-in/general.js"></script>
</body>

</html><?php /**PATH C:\Users\Sipoufo\Documents\Projects\ADISA-BO\resources\views/auth/login.blade.php ENDPATH**/ ?>