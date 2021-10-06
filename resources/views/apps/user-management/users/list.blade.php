<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>{{ __('Liste des utilisateurs') }} || Adisa</title>
    @include('layouts.meta')
    <link href="../../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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
                                <h1 class="text-dark fw-bolder my-1 fs-2">{{__('Liste des utilisateurs') }}</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb fw-bold fs-base my-1">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="/home" class="text-muted text-hover-primary">{{__('Tableau de bord') }}</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">{{__('Gestion des utilisateurs') }}</li>
                                    <li class="breadcrumb-item text-muted">{{__('Utilisateurs') }}</li>
                                    <li class="breadcrumb-item text-dark">{{__('Liste des utilisateurs') }}</li>
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
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card header-->
                                <div class="card-header border-0 pt-6">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                        height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                        fill="black" />
                                                    <path
                                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <input type="text" data-kt-user-table-filter="search"
                                                class="form-control form-control-solid w-250px ps-14"
                                                placeholder="{{__('Faites une recherche')}}" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--begin::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                            <!--begin::Filter-->
                                            <button type="button" class="btn btn-light-primary me-3"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{__('Filtre') }}
                                            </button>
                                            <!--begin::Menu 1-->
                                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px"
                                                data-kt-menu="true">
                                                <!--begin::Header-->
                                                <div class="px-7 py-5">
                                                    <div class="fs-5 text-dark fw-bolder">{{__('Options du filtre') }}</div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Separator-->
                                                <div class="separator border-gray-200"></div>
                                                <!--end::Separator-->
                                                <!--begin::Content-->
                                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <label class="form-label fs-6 fw-bold">Role:</label>
                                                        <select class="form-select form-select-solid fw-bolder"
                                                            data-kt-select2="true" data-placeholder="{{__('Choisissez une option')}}"
                                                            data-allow-clear="true" data-kt-user-table-filter="role"
                                                            data-hide-search="true">
                                                            <option></option>
                                                            <option value="tuteur">{{__('Tuteur') }}</option>
                                                            <option value="apprenant">{{__('Apprenant') }}</option>
                                                            <option value="admin">{{__('Admin') }}</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="mb-10">
                                                        <label
                                                            class="form-label fs-6 fw-bold">{{ __('Validité') }}:</label>
                                                        <select class="form-select form-select-solid fw-bolder"
                                                            data-kt-select2="true" data-placeholder="{{__('choisissez une option')}}"
                                                            data-allow-clear="true" data-kt-user-table-filter="two-step"
                                                            data-hide-search="true">
                                                            <option></option>
                                                            <option value="valide">{{__('Valide') }}</option>
                                                            <option value="invalide">{{__('Invalide') }}</option>
                                                            <option value="bani">{{__('Bani') }}</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-end">
                                                        <button type="reset"
                                                            class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                                            data-kt-menu-dismiss="true"
                                                            data-kt-user-table-filter="reset">{{__('Annuler') }}</button>
                                                        <button type="submit" class="btn btn-primary fw-bold px-6"
                                                            data-kt-menu-dismiss="true"
                                                            data-kt-user-table-filter="filter">{{__('Valider') }}</button>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Menu 1-->
                                            <!--end::Filter-->

                                            <!--begin::Add user-->
                                            <a href="{{route('users.create')}}" class="btn btn-primary">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                            rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{__('Créer un utilisateur') }}
                                            </a>
                                            <!--end::Add user-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <div class="card-body pt-0">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="hidden"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_table_users .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th class="min-w-125px">{{ __('Utilisateur') }}</th>
                                                <th class="min-w-125px">{{ __('Statut') }}</th>
                                                <th class="min-w-125px">{{ __('Date de création') }}</th>
                                                <th class="text-end min-w-100px">Actions</th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <tbody class="text-gray-600 fw-bold">
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>
                                                        <div
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="hidden"
                                                                value="1" />
                                                        </div>
                                                    </td>
                                                    <td class="d-flex align-items-center">
                                                        <div
                                                            class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="view.html">
                                                                <div class="symbol-label">
                                                                         @if (!empty('$user->photo'))
                                                                        <img src="{{asset('assets/media/avatars/SMART_2.JPG')}}"
                                                                        alt="{{ $user->name }} "
                                                                        class="w-100" />
                                                                </div>
                                                                    @else<img src="../../../assets/media/avatars/blank.png"
                                                                        alt="{{ $user->name }} "
                                                                        class="w-100" />
                                                                </div>

                                                                    @endif
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="view.html"
                                                                class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}
                                                            </a>
                                                            <span>{{ $user->email }}</span>
                                                        </div>
                                                    </td>
                                                    <td>{{ $user->statut }}</td>
                                                    <!--end::Two step=-->
                                                    <!--begin::Joined-->
                                                    <td>{{ $user->created_at }}</td>
                                                    <!--begin::Joined-->
                                                    <!--begin::Action=-->
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-primary btn-active-light-primary btn-sm"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end">Actions
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                            <span class="svg-icon svg-icon-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="{{ route('users.edit', $user->id) }}"
                                                                    class="menu-link px-3 text-danger">{{ __('Editer') }}</a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="{{ route('users.show', $user->id) }}"
                                                                    class="menu-link px-3 text-info">{{ __('Voir') }}</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu-->
                                                    </td>
                                                    <!--end::Action=-->
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.footer')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
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
    <script src="../../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../../assets/js/scripts.bundle.js"></script>
    <script src="../../../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="../../../assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="../../../assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="../../../assets/js/custom/apps/user-management/users/list/add.js"></script>
    <script src="../../../assets/js/custom/intro.js"></script>

</body>
<!--end::Body-->

</html>
