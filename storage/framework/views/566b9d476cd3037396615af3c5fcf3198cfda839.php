
<!DOCTYPE html>
<html lang="en"><head>
		<title><?php echo e(__('Réinitialisation du mot de passe')); ?> || Adisa</title>
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
                        <p class="fw-bold fs-2 text-primary"><?php echo e(__('Vous avez oublié votre mot de pase?')); ?>

                            <br /><?php echo e(__('Pas de soucis. Vous pouvez le réinitialiser ici.')); ?></p>
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-70px min-h-lg-200px" style="background-image: url(../assets/media/illustrations/sigma-1/17.png)"></div>
                </div>
            </div>
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<form class="form w-100" novalidate="novalidate" action="<?php echo e(route('password.email')); ?>" id="kt_password_reset_form">
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3"><?php echo e(__('Mot de passe oublié?')); ?></h1>
									<div class="text-gray-400 fw-bold fs-4"><?php echo e(__('Veuillez entrer votre addresse e-mail')); ?>.</div>
								</div>
								<div class="fv-row mb-10">
									<label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
									<input class="form-control form-control-solid <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" type="email" placeholder="<?php echo e(('Entrez votre addresse E-mail')); ?>" name="email" autocomplete="on" />
                                    <?php $__errorArgs = ['email'];
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
                                
								<div class="d-flex flex-wrap justify-content-center pb-lg-0">
									<button type="button" id="kt_password_reset_submit"  class="btn btn-lg btn-primary fw-bolder me-4">
										<span class="indicator-label"><?php echo e(__('Valider')); ?></span>
										<span class="indicator-progress"><?php echo e(__('Veuillez patienter')); ?>... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<a href="<?php echo e(route('login')); ?>" class="btn btn-lg btn-light-primary fw-bolder"><?php echo e(__('Revenir à la page de connexion')); ?></a>
								</div>
							</form>
						</div>
					</div>
					 <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				</div>
			</div>
		</div>
		<script src="../../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../../assets/js/scripts.bundle.js"></script>
		<script src="../../assets/js/custom/authentication/password-reset/password-reset.js"></script></html><?php /**PATH C:\Users\Sipoufo\Documents\Projects\ADISA-BO\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>