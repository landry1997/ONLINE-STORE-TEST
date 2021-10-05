<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{ __('Connexion au tableau de bord') }} || Adisa</title>
    @include('layouts.meta')
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-500px positon-xl-relative">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px">
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-15">
                        <a href="#" class="py-9 pt-lg-20">
                            <img alt="Logo" src="{{asset('logo.png')}}" class="h-200px" />
                        </a>
                        <h1 class="fw-bolder text-primary fs-2qx pb-5 pb-md-10">{{ __('Bienvenue sur ADISA by PLF') }}</h1>
                        <p class="fw-bold fs-2 text-primary">{{ __('Planifier la gestion de la plate-forme') }}
                            <br />{{ __('de e-learning') }}</p>
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-70px min-h-lg-200px" style="background-image: url(../assets/media/illustrations/sigma-1/17.png)"></div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-15">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-12 p-lg-15 mx-auto">
                        <form class="form w-100" id="kt_sign_in_form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center mb-10">
                                <h1 class="text-dark mb-5">{{ __('Connectez vous à votre compte') }}</h1>
                            </div>
                            <div class="fv-row mb-10">
                                <label class="form-label fs-6 fw-bolder text-dark">{{ __('Nom') }}</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror" placeholder="{{ __('Entrez votre nom') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Mot de passe') }}</label>
                                </div>
                                <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror" placeholder="{{ __('Mot de passe') }}" id="password" value="{{ old('password') }}" type="password" name="password" autocomplete="off" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="text-center">
                                {{-- id="kt_sign_in_submit" --}}
                                <button type="submit" class="btn btn-lg btn-dark fw-bolder me-3 my-2">
                                    <span class="indicator-label">{{ __('Connexion') }}</span>
                                    <span class="indicator-progress">{{ __('Veuillez patienter') }}...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                 </div>
                                 <a href="{{ route('password.request') }}" style="margin-left:10rem; margin-top:10rem;" class="link-primary fs-6 fw-bolder text-center">{{ __('Mot de passe oublié') }} ?</a>
                        </form>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <script src="../assets/js/custom/authentication/sign-in/general.js"></script>
</body>

</html>
