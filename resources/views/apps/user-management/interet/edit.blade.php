<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{ __('Editer les interets') }} || Adisa</title>
    @include('layouts.meta')
    <link href="../../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
  
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="position-relative header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            @include('layouts.sidebar')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                @include('layouts.header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Toolbar-->
                    <div class="toolbar" id="kt_toolbar">
                        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder my-1 fs-2">{{ __('Editer les interetss') }}</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home"
                                            class="text-muted text-hover-primary">{{ __('Tableaau de bord') }}</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">{{ __('Gestion des centres d\'interet') }}
                                    </li>
                                    <li class="breadcrumb-item text-muted">
                                        <a href="{{ route('interet-list') }}" class="text-muted text-hover-primary">
                                            {{ __('centres d\'interet') }}
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item text-dark">
                                        {{ __('Détails sur les centres d\'interet') }}</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->

                    <form class="row g-3 needs-validation" method="post"
                        action="{{ route('interet.update', $interet->id) }}" novalidate>
                        @csrf
                        <div class="col-md-6">
                            <label for="validationCustom01 text-center"
                                class="form-label">{{ __('Bio') }}</label>
                            <input type="text" class="form-control text-center" name="bio" id="validationCustom01"
                                value="{{ $interet->bio }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02 text-center"
                                class="form-label">{{ __('Pays') }}</label>
                            <input type="text" class="form-control text-center" name="pays" id="validationCustom02"
                                value="{{ $interet->pays }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('Region') }}</label>
                            <input type="text" class="form-control text-center" name="region" id="validationCustom03"
                                value="{{ $interet->region }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('Ville') }}</label>
                            <input type="text" class="form-control text-center" name="ville" id="validationCustom04"
                                value="{{ $interet->ville }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom05 text-center"
                                class="form-label">{{ __('Secteur') }}</label>
                            <input type="text" class="form-control text-center" name="secteur" id="validationCustom05"
                                value="{{ $interet->secteur }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('Activité') }}</label>
                            <input type="text" class="form-control text-center" name="activite" id="validationCustom06"
                                value="{{ $interet->activite }}">
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('Facebook') }}</label>
                            @if (!empty($interet->facebook))
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="facebook" id="validationCustom07" value="{{ $interet->facebook }}">
                            @else
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="facebook" id="validationCustom07" value="{{ $interet->facebook }}">
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('LinkedIn') }}</label>
                            @if (!empty($interet->linkedin))
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="linkedin" id="validationCustom08" value="{{ $interet->linkedin }}">
                            @else
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="linkedin" id="validationCustom08" value="{{ $interet->linkedin }}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('Twitter') }}</label>
                            @if (!empty($interet->twitter))
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="twitter" id="validationCustom09" value="{{ $interet->twitter }}">
                            @else
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="twitter" id="validationCustom09" value="{{ $interet->twitter }}">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom04 text-center"
                                class="form-label">{{ __('Siteweb') }}</label>
                            @if (!empty($interet->siteweb))
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="siteweb" id="validationCustom10" value="{{ $interet->siteweb }}">
                            @else
                                <input type="text" class="form-control text-center"
                                    pattern="^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$"
                                    name="siteweb" id="validationCustom10" value="{{ $interet->siteweb }}">
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="statut" class="form-label">{{ __('Choix du statut') }}</label>
                            <select class="form-select" id="statut" name="statut" required>
                              <option selected value="{{ $interet->statut }}">{{ $interet->statut }}</option>   
                              <option value="valide">Valide</option>
                              <option value="invalide">invalide</option>
                            </select>
                            <div class="invalid-feedback">
                                {{ __('Choisissez un statut') }}
                            </div>
                            @error('statut')
                                    <span class="invalid-feedback alert alert-primary" role="alert-danger " value="{{ old('statut') }}">
                                     <p class="danger"> {{ $message }}</p> 
                                    </span>
                                @enderror
                          </div>
                          <div class="col-md-6">
                            <label for="genre" class="form-label">{{ __('Choix du genre') }}</label>
                            <select class="form-select" id="genre" name="genre" required>
                              <option selected value="{{ $interet->genre }}">{{ $interet->genre }}</option>  
                              <option value="masculin">Homme</option>
                              <option value="feminin">Femme</option>
                            </select>
                            <div class="invalid-feedback">
                                {{ __('Choisissez un genre') }}
                            </div>
                            @error('genre')
                                    <span class="invalid-feedback alert alert-primary" role="alert-danger " value="{{ old('genre') }}">
                                     <p class="danger"> {{ $message }}</p> 
                                    </span>
                                @enderror
                          </div>

                        <center>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        {{ __('Valider les informations entrées') }}
                                    </label>
                                    <div class="invalid-feedback">
                                        {{ __('Vous devez d\'abord valider les informations') }}
                                    </div>
                                </div>
                            </div>
                        </center>
                        <center>
                            <div class="col-12">
                                <button class="btn btn-dark" type="submit">{{ __('Créer') }}</button>
                            </div>
                        </center>

                    </form>
                    <!--end::Post-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                @include('layouts.footer')
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
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
