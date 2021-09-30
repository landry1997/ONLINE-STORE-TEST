<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <title>{{ __('Ajouter des cours') }} || Adisa</title>
    @include('layouts.meta')
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="position-relative header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
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
                                <h1 class="text-dark fw-bolder my-1 fs-2">{{ __('Création des cours') }}</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary">{{ __('Acceuil') }}</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">{{ __('Piliers et cours') }}</li>
                                    <li class="breadcrumb-item text-muted"><a href="{{ route('cours-list') }}" class="text-muted text-hover-primary">{{__('Liste des cours') }}</a></li>
                                    <li class="breadcrumb-item text-muted">{{ __('Créer un nouveau cours') }}</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->

                    <form class="row g-3 needs-validation" method="post" action="{{ route('cour.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-4">
                            <label for="validationCustom01" class="form-label">{{ __('Nom du cours en francais') }}</label>
                            <input type="text" class="form-control validate @error('nom') is-invalid @enderror" id="validationCustom01" name="nom" required>
                            <div class="invalid-feedback">
                                {{ __('Veuillez entrer le nom du cours') }}
                            </div>
                            @error('nom')
                            <span class="invalid-feedback alert alert-primary" role="alert-danger " value="{{ old('nom') }}">
                                <p class="danger"> {{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">{{ __('Nom du cours en anglais') }}</label>
                            <input type="text" class="form-control" id="validationCustom02" name="nom_en" required>
                            <div class="invalid-feedback">
                                {{ __('Veuillez entrer le nom du cours') }}
                            </div>
                            @error('nom_en')
                            <span class="invalid-feedback alert alert-primary validate @error('nom_en') is-invalid @enderror" role="alert-danger " value="{{ old('nom_en') }}">
                                <p class="danger"> {{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">{{ __('Choix du pilier rataché au cours') }}</label>
                            <select class="form-select" id="validationCustom04" name="pilierId" required>
                                <option selected disabled>{{ __('Choisir') }}</option>
                                @foreach ($piliers as $pilier)
                                <option value="{{ $pilier->id }}">{{ $pilier->titre }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                {{ __('Choisissez un pilier de reférence') }}
                            </div>
                            @error('pilierId')
                            <span class="invalid-feedback alert alert-primary" role="alert-danger " value="{{ old('pilierId') }}">
                                <p class="danger"> {{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="validationCustom03" class="form-label">{{ __('Description du cours en francais') }}</label>
                            <textarea class="form-control validate @error('description') is-invalid @enderror" id="validationCustom03" name="description" placeholder="{{ __('Description') }}" required></textarea>
                            <div class="invalid-feedback">
                                {{ __('Veillez entrer une description en francais') }}
                            </div>
                            @error('description')
                            <span class="invalid-feedback alert alert-primary" role="alert-danger " value="{{ old('description') }}">
                                <p class="danger"> {{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="validationCustom05" class="form-label">{{ __('Description du cours en anglais') }}</label>
                            <textarea class="form-control validate @error('description_en') is-invalid @enderror" id="validationCustom05" name="description_en" placeholder="{{ __('Description') }}" required></textarea>
                            <div class="invalid-feedback">
                                {{ __('Veillez entrer une description en anglais') }}
                            </div>
                            @error('description_en')
                            <span class="invalid-feedback alert alert-primary" role="alert-danger " value="{{ old('description_en') }}">
                                <p class="danger"> {{ $message }}</p>
                            </span>
                            @enderror
                        </div>
                        <div class="row py-4">
                            <div class="col-lg-6 mx-auto">
                                <!-- Upload image input-->
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" name="image" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="image" class="font-weight-light text-muted">{{ __('Choisir une image') }}</label>
                                    <div class="input-group-append">
                                        <label for="image" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">{{ __('Choisir une image') }}</small></label>
                                    </div>
                                </div>

                                <!-- Uploaded image area-->
                                <p class="font-italic text-white text-center">The image uploaded will be
                                    rendered inside the box below.</p>
                                <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                            </div>
                        </div>

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
                        <div class="col-12">
                            <button class="btn btn-dark" type="submit">{{ __('Créer') }}</button>
                        </div>
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
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
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
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
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

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function() {
        $('#upload').on('change', function() {
            readURL(input);
        });
    });

    /*  ==========================================
    	SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById('upload');
    var infoArea = document.getElementById('upload-label');

    input.addEventListener('change', showFileName);

    function showFileName(event) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
    }

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
</script>

</html>