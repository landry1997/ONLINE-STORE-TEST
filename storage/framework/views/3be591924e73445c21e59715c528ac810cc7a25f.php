<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <title><?php echo e(__('Liste des pîliers')); ?> || Adisa</title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="position-relative header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
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
                                <h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Liste des pîliers')); ?></h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary"><?php echo e(__('Acceuil')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><a href="<?php echo e(route('piliers-list')); ?>" class="text-muted text-hover-primary"><?php echo e(__('Piliers et cours')); ?></a></li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__('Liste des pîliers')); ?></li>

                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                                <a href="<?php echo e(route('cour.create')); ?>" class="btn bg-body btn-color-gray-600 btn-active-primary me-4"><?php echo e(__('Créer un nouveau cours')); ?></a>
                                <a href="<?php echo e(route('pilier.create')); ?>" class="btn bg-body btn-color-gray-600 btn-active-primary me-4"><?php echo e(__('Créer un nouveau pilier')); ?></a>
                            </div>
                            <!--end::Actions-->
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div class="container-xxl">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin:Card header-->
                                <div class="card-header">
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Select-->
                                        <div class="me-6 my-1">
                                            <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-sm form-select-solid">
                                                <option value="All" selected="selected"><?php echo e(__('Tout')); ?></option>
                                                <option value="thisyear"><?php echo e(__('Cette année')); ?></option>
                                                <option value="thismonth"><?php echo e(__('Ce mois')); ?></option>
                                                <option value="lastmonth"><?php echo e(__('Mois dernier')); ?></option>
                                                <option value="last90days"><?php echo e(__('il ya 90 jours')); ?></option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Select-->
                                        <div class="me-4 my-1">
                                            <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-sm form-select-solid">
                                                <option value="All" selected="selected"><?php echo e(__('Tout')); ?></option>
                                                <option value="Approved"><?php echo e(__('Actif')); ?></option>
                                                <option value="Declined"><?php echo e(__('Desactivé')); ?></option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                        <!--begin::Search-->
                                        <div class="position-relative w-175px my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-3 position-absolute ms-7 top-50 translate-middle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" id="kt_filter_search" class="form-control form-control-sm form-control-solid ps-12" placeholder="Search Order" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end:Card header-->
                                <!--begin:Card body-->
                                <div class="card-body">
                                    <!--begin::Table-->
                                    <table id="kt_orders_classic" class="table table-row-bordered table-row-dashed g-3 gs-0 align-middle">
                                        <thead class="fs-7 fw-boldest text-gray-400 text-uppercase">
                                            <tr>
                                                <th class="min-w-200px"><?php echo e(__('Nom')); ?></th>
                                                <th class="min-w-150px"><?php echo e(__('Date de création')); ?></th>
                                                <th class="min-w-100px"><?php echo e(__('Nombre de Cours')); ?></th>
                                                <th class="min-w-100px"><?php echo e(__('Statut')); ?></th>
                                                <th class="min-w-150px text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fs-6 fw-boldest">

                                            <?php $__currentLoopData = $piliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pilier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex">
                                                        <!--begin::Image-->
                                                        <div class="symbol symbol-75px me-6 bg-light">
                                                        <?php if(!empty($pilier->image)): ?>
                                                            <img src="<?php echo e(asset($pilier->image)); ?>" alt="<?php echo e($pilier->nom); ?>" />
                                                            <?php else: ?>
                                                            <p>pas d'image</p>
                                                            <?php endif; ?>
                                                        </div>
                                                        <!--end::Image-->
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <a href="#" class="mb-1 text-gray-800 text-hover-primary"><?php echo e($pilier->titre); ?></a>
                                                            <div class="fw-bold text-gray-400"><?php echo e($pilier->createur); ?></div>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </td>
                                                <td><?php echo e($pilier->created_at); ?></td>
                                                <td>faire un count</td>
                                                <td>
                                                    <?php if($pilier->statut == "actif"): ?>
                                                    <span class="badge badge-light-info fw-boldest"><?php echo e($pilier->statut); ?></span>
                                                    <?php else: ?>
                                                    <span class="badge badge-light-danger fw-boldest"><?php echo e($pilier->statut); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-end">
                                                    <!-- Button trigger modal -->

                                                    <a href="<?php echo e(route('piliersview', $pilier->id)); ?>" class="btn btn-light btn-sm"><?php echo e(__('Voir')); ?></a>
                                                    <a href="<?php echo e(route('piliersedit', $pilier->id)); ?>" class="btn btn-light btn-sm"><?php echo e(__('Editer')); ?></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end:Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
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
    <!--begin::Drawers-->

    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-bold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-paperclip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                            <i class="bi bi-upload fs-3"></i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->
    <!--begin::Modals-->
    <!--end::Modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
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
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/craft/account/orders/classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Sep 2021 11:06:08 GMT -->

</html><?php /**PATH /Users/smartcode/Downloads/ADISA-BO/resources/views/account/orders/piliers.blade.php ENDPATH**/ ?>