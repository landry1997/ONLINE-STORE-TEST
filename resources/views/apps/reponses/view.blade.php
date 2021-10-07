<!DOCTYPE html>

<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{__('Liste des reponses aux reponses') }} || Adisa </title>
    @include('layouts.meta')
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
            @include('layouts.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layouts.header')
                <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder my-1 fs-2">{{__('Details des reponses') }}</h1>
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary">{{__('Tableau de bord') }}</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">{{__("Comptes et cours") }}</li>
                                    <li class="breadcrumb-item text-muted"><a href="{{ route('reponses-list') }}" class="text-muted text-hover-primary">{{__("Gestion des reponses") }}</a></li>
                                    <li class="breadcrumb-item text-dark">{{__("details des reponses") }}</li>
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
														<div class="col-lg-5 fs-4 mb-6 mb-lg-0">
															<div>
															<span class="fw-boldest text-gray-800 me-1">{{__("Createur ")}}</span>{{$reponses->user->name}}</div>
															<div>{{__("Date de creation ")}}, {{$reponses->created_at}}</div>
														</div>
														<div class="col-lg-7">
															<div class="d-flex text-muted fw-boldest fs-4 pb-3">
																<span class="flex-grow-1 text-gray-800">{{__("pourcentage de reussite")}}</span>
																<span class="text-gray-800">86 of 100 Used</span>
															</div>
															<div class="progress h-8px bg-light-primary mb-3">
																<div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
															<div class="fw-bold fs-6 text-muted">{{__("counter les utilisateurs qui ont passe la question ")}} et {{__("les utilisateurs qui ont donne la bonne question ")}}</div>
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
																<h4 class="fw-bolder">{{__("Question : ")}}
                                                                    <td class="text-dark">{{$reponses->question->contenu}}</td>
                                                                </h4>
                                                                <h4 class="fw-bolder">{{__("Reponse : ")}}
                                                                    <td class="text-dark">{{$reponses->contenu}}</td>
                                                                    <span style="margin-left: 20px;">
                                                                        <i class="fas fa-edit" data-bs-toggle="modal" title="Modifier le contenu"  data-bs-target="#kt_modal_edit_contenu_form"></i>
                                                                    </span>
                                                                </h4>
																<div>{{__("Statut : ")}}
                                                                    <td class="text-dark">{{$reponses->statut}}</td>
                                                                    <span style="margin-left: 20px;">
                                                                        <i class="fas fa-edit" data-bs-toggle="modal" title="Modifier le statut"  data-bs-target="#kt_modal_edit_statut_customer"></i>
                                                                    </span>
                                                                </div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
                </div>


                <div class="modal fade" id="kt_modal_edit_contenu_form" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <form class="form" action="{{ route('reponses.contenu', $reponses->id) }}" method="POST" id="kt_modal_edit_contenu_form" data-kt-redirect="list.html">
                                @csrf
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <h2 class="fw-bolder">{{__("creer une question") }}</h2>
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
                                            <label class="required fs-6 fw-bold mb-2">{{__("Contenu") }}</label>
                                            <input type="text" class="form-control form-control-solid" placeholder="" value="{{$reponses->contenu}}" name="contenu"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" style="margin-bottom: 25px;" data-kt-users-modal-action="cancel">{{__('Annuler') }}</button>
                                    <button type="submit" class="btn btn-dark" style="margin-bottom: 25px;" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">{{__('Confirmer') }}</span>
                                        <span class="indicator-progress">{{ __('Patientez ...') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="kt_modal_edit_statut_customer" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <form class="form" action="{{ route('reponses.statut', $reponses->id) }}" method="POST" id="kt_modal_edit_statut_form" data-kt-redirect="list.html">
                                @csrf
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <h2 class="fw-bolder">{{__("creer une question") }}</h2>
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
                                            <label class="required fs-6 fw-bold mb-2">{{__("Statut de la question") }}</label>
                                                <select class="form-select form-select-solid fw-bolder" name="statut" data-kt-select2="true" data-placeholder="{{__("Choisir un statut pour cette question") }}" data-allow-clear="true">
                                                    <option value="{{$reponses->statut}}" disabled>{{$reponses->statut}} </option>
                                                    <option value="actif">{{__("Actif") }}</option>
                                                    <option value="desactive">{{__("Desactive") }}</option>
                                                </select>
                                     <!--end::Input-->
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pt-15">
                                    <button type="reset" class="btn btn-light me-3" style="margin-bottom: 25px;" data-kt-users-modal-action="cancel">{{__('Annuler') }}</button>
                                    <button type="submit" class="btn btn-dark" style="margin-bottom: 25px;" data-kt-users-modal-action="submit">
                                        <span class="indicator-label">{{__('Confirmer') }}</span>
                                        <span class="indicator-progress">{{ __('Patientez ...') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div></button>
                            </form>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
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
