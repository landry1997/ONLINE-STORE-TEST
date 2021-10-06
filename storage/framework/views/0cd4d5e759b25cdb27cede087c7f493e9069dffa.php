<!DOCTYPE html>

<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title><?php echo e(__('Liste des reponses aux questions')); ?> || Adisa </title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="../../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Details des reponses')); ?></h1>
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary"><?php echo e(__('Tableau de bord')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__("Comptes et cours")); ?></li>
                                    <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('reponses-list')); ?>" class="text-muted text-hover-primary"><?php echo e(__("Gestion des reponses")); ?></a></li>
                                    <li class="breadcrumb-item text-dark"><?php echo e(__("details des reponses")); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
									<div class="flex-md-row-fluid ms-lg-12">
										<div class="card mb-5 mb-xl-10" id="kt_account_settings_overview" data-kt-scroll-offset="{default: 100, md: 125}">
											<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_overview">
												<div class="card-title">
													<h3 class="fw-boldest m-0">Details</h3>
												</div>
											</div>
											<div id="kt_account_overview" class="collapse show">
												<div class="card-body border-top p-9">
													<div class="row mb-7">
														<div class="col-lg-5 text-gray-600 fs-4 mb-6 mb-lg-0">
															<div class="fw-bold mb-1">
															<span class="fw-boldest text-gray-800 me-1"><?php echo e(__("Createur ")); ?></span><?php echo e($reponses->user->name); ?></div>
															<div class="fw-bold fs-6 mb-2"><?php echo e(__("Date de creation ")); ?>, <?php echo e($reponses->created_at); ?></div>
														</div>
														<div class="col-lg-7">
															<div class="d-flex text-muted fw-boldest fs-4 pb-3">
																<span class="flex-grow-1 text-gray-800"><?php echo e(__("pourcentage de reussite")); ?></span>
																<span class="text-gray-800">86 of 100 Used</span>
															</div>
															<div class="progress h-8px bg-light-primary mb-3">
																<div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="fw-bold fs-6 text-muted"><?php echo e(__("counter les utilisateurs qui onts passe la question ")); ?> et <?php echo e(__("les utilisateurs qui ont donne la bonne reponse ")); ?></div>
														</div>
													</div>
													<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed rounded p-6">
														<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
															</svg>
														</span>
														<div class="d-flex flex-stack flex-grow-1">
															<div class="fw-bold">
                                                                <h4 class="fw-bolder"><?php echo e(__("Question : ")); ?><td class="text-dark"><?php echo e($reponses->question->contenu); ?></td></h4>
																<h4 class="fw-bolder"><?php echo e(__("Reponse : ")); ?><td class="text-dark"><?php echo e($reponses->contenu); ?></td></h4>
																<div><?php echo e(__("Statut : ")); ?><td class="text-dark"><?php echo e($reponses->statut); ?></td></div>
                                                                <div><?php echo e(__("Type de reponse : ")); ?>


                                                                    <?php if($reponses->reponse == "oui" ): ?>
                                                                    <td class="text-dark"><?php echo e(__("Bonne reponse")); ?></td>
                                                                    <?php else: ?>
                                                                   <td class="text-dark"><?php echo e(__("Mauvaise reponse")); ?></td>
                                                                    <?php endif; ?>
                                                                </div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                </div>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>


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
<?php /**PATH /Users/smartcode/Downloads/ADISA-BO/resources/views/apps/reponses/view.blade.php ENDPATH**/ ?>