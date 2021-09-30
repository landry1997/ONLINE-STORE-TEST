<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>{{ __('Changer un livre') }} || Adisa</title>
    @include('layouts.meta')
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(42, 233, 106, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: rgb(25, 230, 151);
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }
    </style>
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
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
                                <h1 class="text-dark fw-bolder my-1 fs-2">{{ __('Changer un livre') }}</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary">{{ __('Acceuil') }}</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">{{ __('Médiathèque') }}</li>
                                    <li class="breadcrumb-item text-muted">{{ __('Actions') }}</li>
                                    <li class="breadcrumb-item text-dark">{{ __('Ajouter une image') }}</li>
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Post-->
                    <div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div class="container-xxl">
                            <!--begin::Navbar-->
                            <div class="card">
                                <div class="card-body pt-9 pb-0">
                                    <!--begin::Details-->
                                    <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                        <!--begin::Image-->

                                        <!--end::Details-->
                                        <div class="separator"></div>
                                        <!--begin::Nav wrapper-->
                                        <div class="d-flex overflow-auto">
                                            <!--begin::Nav links-->
                                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-4 fw-bold flex-nowrap h-55px">
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6" href="project.html">Overview</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6" href="targets.html">Targets</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6" href="budget.html">Budget</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6" href="users.html">Users</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6 active" href="files.html">Files</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6" href="activity.html">Activity</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary me-6" href="settings.html">Settings</a>
                                                </li>
                                                <!--end::Nav item-->
                                            </ul>
                                            <!--end::Nav links-->
                                        </div>
                                        <!--end::Nav wrapper-->
                                    </div>
                                </div>
                                <!--end::Navbar-->
                                <!--end::Modals-->

                                <!--begin::Toolbar-->
                                <div class="d-flex flex-wrap flex-stack my-5">
                                    <!--begin::Title-->
                                    <h2 class="fs-2 fw-bold my-2">{{ __('Changer un livre') }}</h2>
                                    <!--end::Title-->
                                    <!--begin::Controls-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Row-->
                                <form action="{{url('/livres/'.$livre->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row py-4">
                                        <div class="col-lg-6 mx-auto">
                                            <!-- Upload image input-->
                                            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                                <input id="upload" type="file" name="livre" onchange="readURL(this);" class="form-control border-0">

                                                <label id="upload-label" for="image" class="font-weight-light text-muted">{{ __('Choisir un livre') }}</label>
                                                <div class="input-group-append">
                                                    <label for="image" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">{{ __('Choisir un livre') }}</small></label>
                                                </div>
                                            </div>

                                            <!-- Uploaded image area-->
                                            <p class="font-italic text-white text-center">The file uploaded will be
                                                rendered inside the box below.</p>
                                            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                                        </div>
                                    </div>
                                    <center>
                                        <div class="col-md-4">
                                            <label for="validationCustom02" class="form-label">{{ __('Nom du livre') }}</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="nom" value="{{$livre->nom}}" required>
                                            <div class="invalid-feedback">
                                                {{ __('Veuillez entrer le nom du livre') }}
                                            </div>
                                            @error('nom')
                                            <span class="invalid-feedback alert alert-primary validate @error('nom') is-invalid @enderror" role="alert-danger " value="{{ old('nom_en') }}">
                                                <p class="danger"> {{ $message }}</p>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="validationCustom04" class="form-label">{{ __('Choix du statut') }}</label>
                                            <select class="form-select statut" id="validationCustom07" name="statut" required>
                                                <option selected value="{{ $livre->statut }}">{{ $livre->statut }}</option>
                                                <option value="actif">actif</option>
                                                <option value="archivé">Archivé</option>
                                                <option value="désactivé">désactivé</option>
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

                                    </center>
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
                                    <center>
                                        <button type="submit" class="btn btn-dark">{{ __('Editer') }}</button>
                                    </center>
                                </form>
                            </div>
                            <!--end:Row-->
                        </div>
                        <!--end::Container-->
                    </div>
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
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="../../assets/js/custom/modals/users-search.js"></script>
    <script src="../../assets/js/custom/modals/new-target.js"></script>
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
</body>
<!--end::Body-->

</html>