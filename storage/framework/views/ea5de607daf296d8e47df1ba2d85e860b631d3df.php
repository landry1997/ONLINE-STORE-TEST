<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <title><?php echo e(__('Créer les utilisateurs')); ?> || Adisa</title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="../../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.5/css/fileinput.min.css" integrity="sha512-tVgRWAj4NZlRdGbW6EugIl4s6mxokoo5flXds71CCL2o9wKGQEibs2oeEgDEpxeo2DVW4BGS3/WN4L6IGQ6mRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body id="kt_body"
    class="position-relative header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="toolbar" id="kt_toolbar">
                        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
                            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                                <h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Créer les utilisateurs')); ?></h1>
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home"
                                            class="text-muted text-hover-primary"><?php echo e(__('Tableaau de bord')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__('Gestion des utilisateurs')); ?>

                                    </li>
                                    <li class="breadcrumb-item text-muted">
                                        <a href="<?php echo e(route('user-list')); ?>" class="text-muted text-hover-primary">
                                            <?php echo e(__('Liste des utilisateurs')); ?>

                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-dark">
                                        <?php echo e(__('Créer un utiliateur')); ?></li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->

                    <form class="row g-3 needs-validation" method="post" action="<?php echo e(route('users.store')); ?>" enctype="multipart/form-data"
                        novalidate>
                        <?php echo csrf_field(); ?>
                        <div class="col-md-6">
                            <label for="validationCustom01 text-center"
                                class="form-label"><?php echo e(__('Nom')); ?></label>
                            <input type="text" class="form-control text-center" name="name" id="validationCustom01"
                                required>
                            <div class="invalid-feedback">
                                <?php echo e(__('Le format de votre nom ne doit pas etre vide')); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom06 text-center"
                                class="form-label"><?php echo e(__('Prenom')); ?></label>
                            <input type="text" class="form-control text-center" name="surname" id="validationCustom01"
                                required>
                            <div class="invalid-feedback">
                                <?php echo e(__('Votre prénom ne doit pas etre vide')); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Numero de téléphone')); ?></label>
                            <input type="number" class="form-control text-center" name="tel" id="validationCustom03"
                                required>
                            <div class="invalid-feedback">
                                <?php echo e(__('Le format de votre numéro de téléphone est incorrect')); ?>

                            </div>
                            <?php $__errorArgs = ['tel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback alert alert-primary" role="alert-danger ">
                                    <p class="danger"> <?php echo e($message); ?></p>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Email')); ?></label>
                            <input type="email" class="form-control text-center" name="email" id="validationCustom04"
                                required>
                            <div class="invalid-feedback">
                                <?php echo e(__('Le format de votre addresse mail est invalide')); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05 text-center"
                                class="form-label"><?php echo e(__('Mot de passe')); ?></label>
                            <input type="text"
                                title="Votre mot de passe doit contenir: au moins un chiffre, au moins une minuscule, au moins une majuscule, au moins un caractère spécial et contenir au moins 8 lettres."
                                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                                class="form-control text-center validate <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                name="paswword" id="validationCustom05" required>
                            <div class="invalid-feedback">
                                <?php echo e(__('Votre mot de passe doit contenir: au moins un chiffre,')); ?><br>
                                <?php echo e(__('au moins une minuscule,au moins une majuscule,')); ?><br>
                                <?php echo e(__('au moins un caractère spécial et contenir au moins 8 lettres.')); ?>

                            </div>
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback alert alert-primary" role="alert-danger ">
                                    <p class="danger"> <?php echo e($message); ?></p>

                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Photo')); ?></label>


                                <input id="input-b3" name="photo" type="file" class="file validate <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" multiple 
                                data-show-upload="false" data-show-caption="true" data-msg-placeholder="Select {files} for upload..." required>


                                
                                <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback alert alert-primary" role="alert-danger ">
                                    <p class="danger"> <?php echo e($message); ?></p>

                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        </div>

                        <center>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input-center" type="checkbox" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        <?php echo e(__('Valider les informations entrées')); ?>

                                    </label>
                                    <div class="invalid-feedback">
                                        <?php echo e(__('Vous devez d\'abord valider les informations')); ?>

                                    </div>
                                </div>
                            </div>
                        </center>
                        <center>
                            <div class="col-12">
                                <button class="btn btn-dark" type="submit"><?php echo e(__('Créer')); ?></button>
                            </div>
                        </center>

                    </form>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="../../assets/js/custom/account/orders/classic.js"></script>
    <script src="../../assets/js/custom/widgets.js"></script>
    <script src="../../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../../assets/js/custom/modals/create-project.bundle.js"></script>
    <script src="../../assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="../../assets/js/custom/intro.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.2.5/js/fileinput.min.js" integrity="sha512-MlILkh9CR0RaAa++4GCBf8lW7v24lVEguJww11uX4Z0SX6KdVJUWjB0BYRM8HSm0z4cBg1o3ygL6YK8TibM9Rg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
<!--end::Body-->

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    $(document).ready(function() {
        $('.form-select').select2();
    });
</script>
<script>
    $(document).ready(function() {
        $("#input-b3").fileinput({
            rtl: true,
            dropZoneEnabled: true,
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    });
    </script>

</html>
<?php /**PATH /Users/smartcode/Downloads/ADISA-BO/resources/views/apps/user-management/users/create.blade.php ENDPATH**/ ?>