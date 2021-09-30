<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title><?php echo e(__('Détails des interetss')); ?> || Adisa</title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="../../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Détail des interetss')); ?></h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary"><?php echo e(__('Tableaau de bord')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__('Gestion des centres d\'interet')); ?></li>
                                    <li class="breadcrumb-item text-muted">
										<a href="<?php echo e(route('interet-list')); ?>" class="text-muted text-hover-primary">
											<?php echo e(__('centres d\'interet')); ?>

										</a>
										</li>
                                    <li class="breadcrumb-item text-dark"><?php echo e(__('Détails sur les centres d\'interet')); ?></li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->

                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom01 text-center"
                                class="form-label"><?php echo e(__('Bio')); ?></label>
                            <input type="text" class="form-control text-center" id="validationCustom01" value="<?php echo e($interets->bio); ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02 text-center"
                                class="form-label"><?php echo e(__('Pays')); ?></label>
                            <input type="text" class="form-control text-center" id="validationCustom02" value="<?php echo e($interets->pays); ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Region')); ?></label>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->region); ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Ville')); ?></label>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->ville); ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05 text-center"
                                class="form-label"><?php echo e(__('Secteur')); ?></label>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->secteur); ?>" disabled>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Activité')); ?></label>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->activite); ?>" disabled>
                        </div>
						<div class="col-md-6">
							<label for="validationCustom04 text-center"
							class="form-label"><?php echo e(__('Facebook')); ?></label>
							<?php if(!empty($interets->facebook)): ?>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->facebook); ?>" disabled>
							<?php else: ?>
							<input type="text" class="form-control text-center" id="validationCustom04" value="ce centre d'intéret n'est relié à aucun compte facebook" disabled>
							<?php endif; ?>
                        </div>

						<div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('LinkedIn')); ?></label>
								<?php if(!empty($interets->linkedin)): ?>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->linkedin); ?>" disabled>
							<?php else: ?>
							<input type="text" class="form-control text-center" id="validationCustom04" value="ce centre d'intéret n'est relié à aucun compte linkedIn" disabled>
							<?php endif; ?>
                        </div>
						<div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Twitter')); ?></label>
								<?php if(!empty($interets->twitter)): ?>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->twitter); ?>" disabled>
							<?php else: ?>
							<input type="text" class="form-control text-center" id="validationCustom04" value="ce centre d'intéret n'est relié à aucun compte twitter" disabled>
							<?php endif; ?>
                        </div>
						<div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label"><?php echo e(__('Siteweb')); ?></label>
								<?php if(!empty($interets->siteweb)): ?>
                            <input type="text" class="form-control text-center" id="validationCustom04" value="<?php echo e($interets->siteweb); ?>" disabled>
							<?php else: ?>
							<input type="text" class="form-control text-center" id="validationCustom04" value="ce centre d'intéret n'est relié à aucun siteweb" disabled>
							<?php endif; ?>
                        </div>

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
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
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
</html>
<?php /**PATH C:\Users\Sipoufo\Documents\Projects\ADISA-BO\resources\views/apps/user-management/interet/view.blade.php ENDPATH**/ ?>