<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title><?php echo e(__('Liste des videos')); ?> || Adisa</title>
    <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
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
                                <h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Liste des video')); ?></h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <?php if($message = Session::get('success')): ?>
                                <div class="alert alert-success">
                                    <p><?php echo e($message); ?></p>
                                </div>
                                <?php endif; ?>
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="../../index-2.html" class="text-muted text-hover-primary"><?php echo e(__('Acceuil')); ?></a>
                                    </li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__('Médiathèque')); ?></li>
                                    <li class="breadcrumb-item text-muted"><?php echo e(__('Type de médias')); ?></li>
                                    <li class="breadcrumb-item text-dark"><?php echo e(__('Images')); ?></li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-nowrap text-nowrap py-1">
                                <a href="<?php echo e(route('image-create')); ?>" class="btn btn-primary"><?php echo e(__('Ajouter une image')); ?></a>
                                <a href="#" class="btn btn-primary"><?php echo e(__('Ajouter une video')); ?></a>
                                <a href="#" class="btn btn-primary"><?php echo e(__('Ajouter un pdf')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
                        <div class="container-xxl">
                            <div class="d-flex flex-wrap flex-stack my-5">
                                <h2 class="fs-2 fw-bold my-2"><?php echo e(__('Liste des video')); ?></h2>
                            </div>
                            <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                                <!--begin::Col-->

                                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(empty($video)): ?>
                                <p class="text-dark">Aucune video disponible pour le moment</p>
                                <?php else: ?>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <!--begin::Card-->
                                    <div class="card h-100">
                                        <!--begin::Card body-->
                                        <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                            <!--begin::Name-->
                                            <a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                <!--begin::Image-->

                                                <div class="symbol symbol-0px mb-5">

                                                    <video width="400" controls>
                                                        <source src="<?php echo e(asset($video->url)); ?>" type="video/mp4">

                                                    </video>
                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Title-->
                                                <div class="fs-5 fw-bolder mb-2"><?php echo e($video->nom); ?></div>
                                                <!--end::Title-->
                                            </a>
                                            <!--end::Name-->
                                            <!--begin::Description-->
                                            <div class="fs-7 fw-bold text-gray-400"><?php echo e(__('Depuis le : ')); ?><?php echo e($video->created_at); ?></div>
                                            <!--end::Description-->
                                            <a class="btn-btn-dark" href="<?php echo e(url('/videos/'.$video->id)); ?>"><?php echo e(__('Voir le détail')); ?></a>
                                            <a class="btn-btn-dark" href="<?php echo e(url('/videos/edit/'.$video->id)); ?>"><?php echo e(__('Editer')); ?></a>
                                        </div>

                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!--end::Col-->
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="card shadow-none rounded-0">
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <script src="../../assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="../../assets/js/custom/intro.js"></script>
</body>

</html><?php /**PATH /home/denver99/SMARTCODE-PROJECT/ADISA-BO/resources/views/authentication/videos/index.blade.php ENDPATH**/ ?>