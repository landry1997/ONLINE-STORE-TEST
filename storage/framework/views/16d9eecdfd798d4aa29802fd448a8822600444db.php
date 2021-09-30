<!DOCTYPE html>

<html lang="en">

<head>
		<title><?php echo e(__('Details de cet article')); ?> || Adisa </title>
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
									<h1 class="text-dark fw-bolder my-1 fs-2">Customer Details</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb fw-bold fs-base my-1">
										<li class="breadcrumb-item text-muted">
											<a href="../../index-2.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<li class="breadcrumb-item text-muted">Customers</li>
										<li class="breadcrumb-item text-dark">Customer Details</li>
									</ul>
									<!--end::Breadcrumb-->
								</div>
							</div>
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div class="container-xxl">
								<!--begin::Layout-->
								<div class="d-flex flex-column flex-xl-row">
									<!--begin::Sidebar-->
									<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
										<!--begin::Card-->
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card body-->
											<div class="card-body pt-15">
												<!--begin::Summary-->
												<div class="d-flex flex-center flex-column mb-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-100px symbol-circle mb-7">
														<img src="../../assets/media/avatars/150-26.jpg" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">Max Smith</a>
													<!--end::Name-->
													<!--begin::Position-->
													<div class="fs-5 fw-bold text-muted mb-6">Software Enginer</div>
													<!--end::Position-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap flex-center">
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-75px">6,900</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Earnings</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-50px">130</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																		<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Tasks</div>
														</div>
														<!--end::Stats-->
														<!--begin::Stats-->
														<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
															<div class="fs-4 fw-bolder text-gray-700">
																<span class="w-50px">500</span>
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																<span class="svg-icon svg-icon-3 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																		<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<div class="fw-bold text-muted">Hours</div>
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Info-->
												</div>
												<!--end::Summary-->
												<!--begin::Details toggle-->
												<div class="d-flex flex-stack fs-4 py-3">
													<div class="fw-bolder rotate collapsible" data-bs-toggle="collapse" href="#kt_customer_view_details" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Details
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit customer details">
														<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_customer">Edit</a>
													</span>
												</div>
												<!--end::Details toggle-->
												<div class="separator separator-dashed my-3"></div>
												<!--begin::Details content-->
												<div id="kt_customer_view_details" class="collapse show">
													<div class="py-5 fs-6">
														<!--begin::Badge-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5"><?php echo e(__("Titre")); ?></div>
														<div class="text-gray-600"><?php echo e($articles->titre); ?></div>
														<div class="fw-bolder mt-5"><?php echo e(__("Titre en anglais")); ?></div>
														<div class="text-gray-600">
															<a href="#" class="text-gray-600 text-hover-primary"><?php echo e($articles->titreEn); ?></a>
														</div>
														<div class="fw-bolder mt-5"><?php echo e(__("Description")); ?></div>
														<div class="text-gray-600"><?php echo e($articles->description); ?></div>
														<div class="fw-bolder mt-5"><?php echo e(__("Description en anglais")); ?></div>
														<div class="text-gray-600"><?php echo e($articles->descriptionEn); ?></div>
														<div class="fw-bolder mt-5"><?php echo e(__("Createur")); ?></div>
														<div class="text-gray-600"><?php echo e($articles->user->name); ?></div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bolder mt-5">Tax ID</div>
														<div class="text-gray-600">TX-8674</div>
														<!--begin::Details item-->
													</div>
												</div>
												<!--end::Details content-->
											</div>
											<!--end::Card body-->
										</div>
									</div>
									<!--end::Sidebar-->
									<!--begin::Content-->
									<div class="flex-lg-row-fluid ms-lg-15">
										<!--begin:::Tabs-->
										<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_customer_view_overview_tab">Overview</a>
											</li>
										</ul>
										<div class="tab-content" id="myTabContent">
											<!--begin:::Tab pane-->
											<div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">
												<!--begin::Card-->
												<div class="card pt-4 mb-6 mb-xl-9">
													<!--begin::Card header-->
													<div class="card-header border-0">
														<div class="card-title">
															<h2><?php echo e(__("Liste des commentaires")); ?></h2>
														</div>
													</div>
													<div class="card-body pt-0 pb-5">
														<table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
															<thead class="border-bottom border-gray-200 fs-7 fw-bolder">
																<tr class="text-start text-muted text-uppercase gs-0">
																	<th class="min-w-100px">Invoice No.</th>
																	<th>Status</th>
																	<th>Amount</th>
																	<th class="min-w-100px">Date</th>
																	<th class="text-end min-w-100px pe-4">Actions</th>
																</tr>
																<!--end::Table row-->
															</thead>
															<tbody class="fs-6 fw-bold text-gray-600">
																<tr>
																	<!--begin::Invoice=-->
																	<td>
																		<a href="#" class="text-gray-600 text-hover-primary mb-1">3578-2586</a>
																	</td>
																	<!--end::Invoice=-->
																	<!--begin::Status=-->
																	<td>
																		<span class="badge badge-light-warning">Pending</span>
																	</td>
																	<!--end::Status=-->
																	<!--begin::Amount=-->
																	<td>$8,700.00</td>
																	<!--end::Amount=-->
																	<!--begin::Date=-->
																	<td>01 Sep 2020, 4:58 pm</td>
																	<!--end::Date=-->
																	<!--begin::Action=-->
																	<td class="pe-0 text-end">
																		<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																		<span class="svg-icon svg-icon-5 m-0">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon--></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="view.html" class="menu-link px-3">View</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																	<!--end::Action=-->
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="kt_modal_update_customer" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<div class="modal-content">
											<form class="form" method="POST" action="<?php echo e(route('blog.update', $articles->id)); ?>">
                                                <?php echo csrf_field(); ?>
												<div class="modal-header" id="kt_modal_update_customer_header">
													<h2 class="fw-bolder"><?php echo e(__("Modifier cet article")); ?></h2>
													<div id="kt_modal_update_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
													</div>
												</div>
												<div class="modal-body py-10 px-lg-17">
													<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_customer_header" data-kt-scroll-wrappers="#kt_modal_update_customer_scroll" data-kt-scroll-offset="300px">
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
															<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																	<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																	<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																</svg>
															</span>
															<div class="d-flex flex-stack flex-grow-1">
																<div class="fw-bold">
																	<div class="fs-6 text-gray-700">La mise a jour des informations des articles est une donnee sensible. pour plus de details veuillez consulter notre
																	<a href="#">politique de confidentialité</a></div>
																</div>
															</div>
														</div>
														<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_customer_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_customer_user_info">User Information
														<span class="ms-2 rotate-180">
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
														</span></div>
														<div id="kt_modal_update_customer_user_info" class="collapse show">
															<div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2"><?php echo e(__("Titre")); ?></label>
																<input type="text" class="form-control form-control-solid" placeholder="" name="titre" value="<?php echo e($articles->titre); ?>" />
															</div>
                                                            <div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2"><?php echo e(__("Titre")); ?></label>
																<input type="text" class="form-control form-control-solid" placeholder="" name="titre" value="<?php echo e($articles->titre); ?>" />
															</div>
                                                            <div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2"><?php echo e(__("Titre en anglais")); ?></label>
																<input type="text" class="form-control form-control-solid" placeholder="" name="titreEn" value="<?php echo e($articles->titreEn); ?>" />
															</div>
                                                            <div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2"><?php echo e(__("Description")); ?></label>
																<input type="text" class="form-control form-control-solid" placeholder="" name="description" value="<?php echo e($articles->description); ?>" />
															</div>
                                                            <div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2"><?php echo e(__("Description en anglais")); ?></label>
																<input type="text" class="form-control form-control-solid" placeholder="" name="descriptionEn" value="<?php echo e($articles->descriptionEn); ?>" />
															</div>
                                                            <div class="fv-row mb-7">
																<label class="fs-6 fw-bold mb-2"><?php echo e(__("Statut")); ?></label>
                                                                <select class="form-select" id="validationCustom04" name="statut" required>
                                                                    <option selected value="<?php echo e($articles->statut); ?>"><?php echo e($articles->statut); ?>

                                                                    </option>
                                                                    <option value="valide">valide</option>
                                                                    <option value="invalide">invalide</option>
                                                                </select>
                                                            </div>
														</div>
													</div>
													<!--end::Scroll-->
												</div>
												<div class="modal-footer flex-center">
													<button type="reset" id="kt_modal_update_customer_cancel" class="btn btn-light me-3">Discard</button>
													<button type="submit" id="kt_modal_update_customer_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
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
		<script src="../../assets/js/custom/intro.js"></script>
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

            $(document).ready(function() {
                $('#validationCustom07').select2();
            });

            $(document).ready(function() {
                $('#type').select2();
            });
        </script>

	</body>

    </html>
<?php /**PATH /Users/smartcode/Downloads/ADISA-BO-main/resources/views/apps/blog/view.blade.php ENDPATH**/ ?>