<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ __('Réinitialisation du mot de passe') }} || Adisa</title>
    @include('layouts.meta')
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="auth-bg">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-500px positon-xl-relative">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-500px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-15">
                        <a href="#" class="py-9 pt-lg-15">
                            <img alt="Logo" src="{{asset('logo.png')}}" class="h-100px" />
                        </a>
                        <h1 class="fw-bolder text-primary fs-2qx pb-5 pb-md-10">{{ __('Bienvenue sur Adisa') }}</h1>
                        <p class="fw-bold fs-2 text-primary">{{ __('Vous avez oublié votre mot de pase?') }}
                            <br />{{ __('Pas de soucis. Vous pouvez le réinitialiser ici.') }}</p>
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-70px min-h-lg-200px" style="background-image: url(../assets/media/illustrations/sigma-1/17.png)"></div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                        <div class="text-center mb-10">
                            <h1 class="text-dark mb-3">{{__('Mot de passe oublié')}}</h1>
                        </div>
                        <form class="form w-100" novalidate="novalidate" action="{{ route('password.email') }}" method="POST">
                            @csrf

                            @if(session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                            @endif
                            <div class="fv-row mb-10">
                                <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                                <input class="form-control form-control-solid @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" placeholder="{{('Entrez votre addresse E-mail')}}" name="email" autocomplete="on" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                                <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                                    <span class="indicator-label">{{__('valider')}}</span>
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">{{__('Revenir à la page de connexion')}}</a>
                            </div>
                        </form>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <script src="../../assets/js/custom/authentication/password-reset/password-reset.js"></script>

</html>