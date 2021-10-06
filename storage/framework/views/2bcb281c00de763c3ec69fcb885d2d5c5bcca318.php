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
                                <h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Liste des reponses')); ?></h1>
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary"><?php echo e(__('Tableau de bord')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__("Comptes et cours")); ?></li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__("Gestion des reponses")); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div class="container-xxl">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->Filter</button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->
                                                <!--begin::Content-->
                                                <div class="px-7 py-5">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fs-5 fw-bold mb-3"><?php echo e(__("Createur")); ?>:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
																<option></option>
                                                                

															</select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <!--begin::Label-->
                                                        <label class="form-label fs-5 fw-bold mb-3">Payment Type:</label>
                                                        <!--end::Label-->
                                                        <!--begin::Options-->
                                                        <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="payment_type">
                                                            <!--begin::Option-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
																	<input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked" />
																	<span class="form-check-label text-gray-600">All</span>
																</label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
																	<input class="form-check-input" type="radio" name="payment_type" value="valide" />
																	<span class="form-check-label text-gray-600">Valide</span>
																</label>
                                                            <!--end::Option-->
                                                            <!--begin::Option-->
                                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
																	<input class="form-check-input" type="radio" name="payment_type" value="invalide" />
																	<span class="form-check-label text-gray-600">Invalide</span>
																</label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Options-->
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset"><?php echo e(__("Annuler")); ?></button>
                                                        <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter"><?php echo e(__("Valider")); ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer"><?php echo e(__("creer une nouvelle reponse")); ?></button>
                                        </div>
                                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                                            <div class="fw-bolder me-5">
                                                <span class="me-2" data-kt-customer-table-select="selected_count"></span><?php echo e(__("Selectione")); ?></div>
                                            <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected"><?php echo e(__("Desactiver ces elements")); ?></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-150px"><?php echo e(__("Contenu")); ?></th>
                                                <th class="min-w-60px"><?php echo e(__("createur")); ?></th>
                                                <th class="min-w-60px"><?php echo e(__("Question")); ?></th>
                                                <th class="min-w-50px"><?php echo e(__("Type")); ?></th>
                                                <th class="min-w-50px"><?php echo e(__("Statut")); ?></th>
                                                <th class="text-end min-w-70px">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-bold text-gray-600">
                                            <?php $__currentLoopData = $reponses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reponse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="view.html" class="text-gray-800 text-hover-primary mb-1"><?php echo e($reponse->contenu); ?></a>
                                                </td>
                                                <td>
                                                    <a href="#" class="text-gray-600 text-hover-primary mb-1"><?php echo e($reponse->user->name); ?></a>
                                                </td>

                                                <td><?php echo e($reponse->question->contenu); ?></td>
                                                <?php if($reponse->reponse == "oui" ): ?>
                                                <td data-filter="reponse" class="text-dark"> reponse </td>
                                                <?php else: ?>
                                                <td data-filter="mauvaise reponse" class="text-danger">  mauvaise reponse</td>
                                                <?php endif; ?>
                                                <td><?php echo e($reponse->statut); ?></td>
                                                <!--end::Date=-->
                                                <!--begin::Action=-->
                                                <td class="text-end">
                                                    <span>
                                                    <i class="fas fa-edit" title="Editer"></i>
                                                    </span>
                                                    <span>
                                                        <a href="<?php echo e(route("reponses.show", $reponse->id)); ?>">  <i class="fas fa-eye" title="Voir le detail" ></i></a>
                                                    </span>
                                                    <span>
                                                        <i class="fas fa-plus" data-bs-toggle="modal" title="Ajouter un element"  data-bs-target="#kt_modal_add_customer"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <div class="modal-content">
                                        <form class="form" action="<?php echo e(route('reponses.store')); ?>" method="POST" id="kt_modal_add_customer_form" data-kt-redirect="list.html">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-header" id="kt_modal_add_customer_header">
                                                <h2 class="fw-bolder"><?php echo e(__("creer une question")); ?></h2>
                                                <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
                                                </div>
                                            </div>
                                            <div class="modal-body py-10 px-lg-17">
                                                <!--begin::Scroll-->
                                                <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                                    data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">
                                                        <label class="required fs-6 fw-bold mb-2"><?php echo e(__("Contenu")); ?></label>
                                                        <input type="text" class="form-control form-control-solid"  placeholder="" name="contenu"/>

                                                        <label class="required fs-6 fw-bold mb-2"><?php echo e(__("Reponse exacte?")); ?></label>
                                                           <!--begin::Input-->
                                                           <select class="form-select form-select-solid fw-bolder" name="reponse" data-kt-select2="true" data-placeholder="<?php echo e(__("sagit-il de la reponse a la question que vous choisissez?")); ?>" data-allow-clear="true">
                                                                <option></option>
                                                                <option value="oui">OUI</option>
                                                                <option value="non">NON</option>
                                                            </select>

                                                        <label class="required fs-6 fw-bold mb-2"><?php echo e(__("Question")); ?></label>
                                                           <!--begin::Input-->
                                                           <select class="form-select form-select-solid fw-bolder" name="questionId" data-kt-select2="true" data-placeholder="<?php echo e(__("Choisir une question")); ?>" data-allow-clear="true">
                                                                <option></option>
                                                                <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($question->id); ?>"><?php echo e($question->contenu); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                    <!--end::Input-->

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center pt-15">
                                                <button type="reset" class="btn btn-light me-3" style="margin-bottom: 25px;" data-kt-users-modal-action="cancel"><?php echo e(__('Annuler')); ?></button>
                                                <button type="submit" class="btn btn-dark" style="margin-bottom: 25px;" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label"><?php echo e(__('Confirmer')); ?></span>
                                                    <span class="indicator-progress"><?php echo e(__('Patientez ...')); ?>

                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Post-->
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
<?php /**PATH /Users/smartcode/Downloads/ADISA-BO/resources/views/apps/reponses/list.blade.php ENDPATH**/ ?>