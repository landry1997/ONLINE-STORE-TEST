<!DOCTYPE html>
<html lang="fr">

<head>
	<title><?php echo e(__('Liste des images')); ?> || Adisa</title>
	<?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="toolbar" id="kt_toolbar">
						<div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
							<div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
								<h1 class="text-dark fw-bolder my-1 fs-2"><?php echo e(__('Liste des images')); ?></h1>
								<?php if($message = Session::get('success')): ?>
								<div class="alert alert-success">
									<p><?php echo e($message); ?></p>
								</div>
								<?php endif; ?>
								<ul class="breadcrumb fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="/" class="text-muted text-hover-primary"><?php echo e(__('Acceuil')); ?></a>
									</li>
									<li class="breadcrumb-item text-muted"><?php echo e(__('Médiathèque')); ?></li>
									<li class="breadcrumb-item text-muted"><?php echo e(__('Type de médias')); ?></li>
									<li class="breadcrumb-item text-dark"><?php echo e(__('Images')); ?></li>
								</ul>
							</div>
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
								<h2 class="fs-2 fw-bold my-2"><?php echo e(__('Liste des images')); ?></h2>
							</div>
							<div class="row g-2 g-xl-9 mb-2 mb-xl-9">
								<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php if(empty($image)): ?>
								<p class="text-dark">Aucune image disponible pour le moment</p>
								<?php else: ?>
								<div class="col-md-2 col-lg-2 col-xl-2">
									<div class="card h-100">
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<a href="#" class="text-gray-800 text-hover-primary d-flex flex-column">
												<div class="symbol symbol-0px mb-5">
													<img alt="<?php echo e($image->nom); ?>" src="<?php echo e(asset($image->url)); ?>" class="h-70px img-thumbnail" />
												</div>
												<div class="fs-5 fw-bolder mb-2"><?php echo e($image->nom); ?></div>
											</a>
											<div class="fs-7 fw-bold text-gray-400"><?php echo e(__('Depuis le : ')); ?><?php echo e($image->created_at); ?></div>
											<a class="btn-btn-dark" href="<?php echo e(url('/images/'.$image->id)); ?>"><?php echo e(__('Voir le détail')); ?></a>
											<a class="btn-btn-dark" href="<?php echo e(url('/images/edit/'.$image->id)); ?>"><?php echo e(__('Editer')); ?></a>
										</div>
									</div>
								</div>
								<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

</html>
<?php /**PATH /Users/smartcode/Downloads/ADISA-BO/resources/views/authentication/images/index.blade.php ENDPATH**/ ?>