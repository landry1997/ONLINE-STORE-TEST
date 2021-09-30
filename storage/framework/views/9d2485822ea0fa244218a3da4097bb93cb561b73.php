<!--begin::Header-->
<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Logo bar-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
            <!--begin::Aside Toggle-->
            <div class="d-flex align-items-center d-lg-none">
                <div class="btn btn-icon btn-active-color-success ms-n2 me-1" id="kt_aside_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                            <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
            </div>
            <!--end::Aside Toggle-->
            <!--begin::Logo-->
            <a href="index-2.html" class="d-lg-none">
                <img alt="Logo" src="assets/media/logos/logo-compact.svg" class="mh-40px" />
            </a>
            <!--end::Logo-->
            <!--begin::Aside toggler-->
            <div class="btn btn-icon w-auto ps-0 btn-active-color-success d-none d-lg-inline-flex me-2 me-lg-5" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr060.svg-->
                <span class="svg-icon svg-icon-2 rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="black" />
                        <path d="M6.2238 13.2561C5.54282 12.5572 5.54281 11.4429 6.22379 10.7439L10.377 6.48107C10.8779 5.96697 11.75 6.32158 11.75 7.03934V16.9607C11.75 17.6785 10.8779 18.0331 10.377 17.519L6.2238 13.2561Z" fill="black" />
                        <rect opacity="0.3" x="2" y="4" width="2" height="16" rx="1" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Aside toggler-->
        </div>
        <!--end::Logo bar-->
        <!--begin::Topbar-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Search-->
            <div class="d-flex align-items-stretch">
                <!--begin::Search-->
                <div id="kt_header_search" class="d-flex align-items-center w-lg-400px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                    <!--begin::Tablet and mobile search toggle-->
                    <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                        <div class="btn btn-icon btn-icon-gray-500 btn-active-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Tablet and mobile search toggle-->
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                        </span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-icon-gray-600 btn-active-color-success position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1 me-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Menu-->
                    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                        <!--begin::Wrapper-->
                        <div data-kt-search-element="wrapper">
                            <!--begin::Categories-->
                            <div data-kt-search-element="categories" class="d-flex overflow-auto position-relative" data-kt-buttons="true">
                                <!--begin::Category items-->
                                <a class="btn btn-light-success active rounded-pill me-1 py-2 px-4" data-kt-search-category="all">All</a>
                                <a class="btn btn-light-success rounded-pill me-1 py-2 px-4" data-kt-search-category="targets">Targets</a>
                                <a class="btn btn-light-success rounded-pill me-1 py-2 px-4" data-kt-search-category="projects">Projects</a>
                                <a class="btn btn-light-success rounded-pill me-1 py-2 px-4" data-kt-search-category="users">Users</a>
                                <!--end::Category items-->
                                <!--begin::Preferences toggle-->
                                <div data-kt-search-element="preferences-show" class="btn btn-icon btn-sm btn-active-color-success ms-auto">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                    <span class="svg-icon svg-icon-2x">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                            <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                            <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                            <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Preferences toggle-->
                            </div>
                            <!--end::Categories-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200 my-6"></div>
                            <!--end::Separator-->
                            <!--begin::Recently viewed-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Items-->
                                <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                    <!--begin::Category title-->
                                    <h3 class="fs-4 fw-bold m-0 pb-5" data-kt-search-element="category-title">Targets</h3>
                                    <!--end::Category title-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Company Rbranding</span>
                                            <span class="badge badge-light">UI Design</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Company Re-branding</span>
                                            <span class="badge badge-light">Web Development</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Business Analytics App</span>
                                            <span class="badge badge-light">Administration</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/atica.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">5G Mobile Billing</span>
                                            <span class="badge badge-light">Database Design</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/rgb.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">UI/UX Conference</span>
                                            <span class="badge badge-light">Server Setup</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">EcoLeaf App Launch</span>
                                            <span class="badge badge-light">Marketing</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Tower Group Website</span>
                                            <span class="badge badge-light">Google Adwords</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Category title-->
                                    <h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Projects</h3>
                                    <!--end::Category title-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                            <span class="fs-7 text-muted">#45670</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                        <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                        <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                            <span class="fs-7 text-muted">#84250</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                        <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                        <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                            <span class="fs-7 text-muted">#67945</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                            <span class="fs-7 text-muted">#24005</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                            <span class="fs-7 text-muted">#45690</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                                        <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                        <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                            <span class="fs-7 text-muted">#21090</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                            <span class="fs-7 text-muted">#34560</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Category title-->
                                    <h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Users</h3>
                                    <!--end::Category title-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-1.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                            <span class="badge badge-light">Marketing Manager</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-3.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Olivia Bold</span>
                                            <span class="badge badge-light">Software Engineer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-4.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Wild</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-6.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                            <span class="badge badge-light">Google Expert</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-8.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Ana Clark</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-11.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Nick Pitola</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <img src="assets/media/avatars/150-12.jpg" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800 me-2">Edward Kulnic</span>
                                            <span class="badge badge-light">System Administrator</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Recently viewed-->
                            <!--begin::Recently viewed-->
                            <div data-kt-search-element="recently-viewed">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack fw-bold">
                                    <span class="text-muted fs-5 me-2">Recently Viewed:</span>
                                    <!--begin::Clear-->
                                    <div data-kt-search-element="recently-viewed-clear" class="btn btn-link fw-6">Clear</div>
                                    <!--end::Clear-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Items-->
                                <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                            <span class="fs-7 text-muted">#45670</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
                                                        <path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
                                                        <path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                            <span class="fs-7 text-muted">#84250</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                        <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                        <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                            <span class="fs-7 text-muted">#67945</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                            <span class="fs-7 text-muted">#24005</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                            <span class="fs-7 text-muted">#45690</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                                        <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                        <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                            <span class="fs-7 text-muted">#21090</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px me-4">
                                            <span class="symbol-label bg-light-success">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                        <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="fw-bold">
                                            <span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                            <span class="fs-7 text-muted">#34560</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Recently viewed-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="text-muted fw-bold fs-5 py-10">No result found</div>
                                <!--end::Message-->
                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img src="assets/media/illustrations/sigma-1/1.png" alt="" class="mw-100 mh-200px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Preferences-->
                        <div data-kt-search-element="preferences" class="d-none">
                            <!--begin::Heading-->
                            <h3 class="fw-bold text-dark pb-10 m-0">Search Preferences</h3>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="pb-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                    <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Projects</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                    <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Targets</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                    <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Affiliate Programs</span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                    <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Referrals</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                                    <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Users</span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end pt-10">
                                <button type="reset" class="btn btn-light btn-active-light-success me-2 px-6" data-kt-search-element="preferences-dismiss">Cancel</button>
                                <button type="submit" class="btn btn-success px-6">Save Changes</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Preferences-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Search-->
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-stretch flex-shrink-0">
                <!--begin::Activities-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Drawer toggle-->
                    <div class="btn btn-icon btn-active-light-success w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Drawer toggle-->
                </div>
                <!--end::Activities-->
                <!--begin::Quick links-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-active-light-success w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
                                <path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
                                <path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
                                <path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-300px" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-2.jpg')">
                            <!--begin::Title-->
                            <h3 class="pt-10 text-white fw-boldest fs-3 px-9">Quick Links</h3>
                            <!--end::Title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch nav-tabs-light fw-bold px-9">
                                <li class="nav-item">
                                    <a class="nav-link active pb-4" data-bs-toggle="tab" href="#kt_topbar_quick_link_1">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pb-4" data-bs-toggle="tab" href="#kt_topbar_quick_link_2">Campaigns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link pb-4" data-bs-toggle="tab" href="#kt_topbar_quick_link_3">Targets</a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_topbar_quick_link_1">
                                <!--begin::Items-->
                                <div class="px-9 pt-6 pb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/fox-hub.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Mivy App</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">CRM App tools application</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/leaf.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Leaf CRM</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Awesome CRM apps &amp; tools</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/atica.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Atica SR</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Antarcrtica based snow app</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/treva.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Avionica</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Flight Plan with Garmin Sync</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                                <!--begin::View more-->
                                <div class="py-5 text-center border-top">
                                    <a href="pages/projects/list.html" class="btn bg-body text-success p-0">View All Projects 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_topbar_quick_link_2">
                                <!--begin::Items-->
                                <div class="px-9 pt-6 pb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/atica.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Atica SR</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Antarcrtica based snow app</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/leaf.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Leaf CRM</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Awesome CRM apps &amp; tools</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/treva.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Avionica</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Flight Plan with Garmin Sync</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/fox-hub.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Mivy App</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">CRM App tools application</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                                <!--begin::View more-->
                                <div class="py-5 text-center border-top">
                                    <a href="pages/profile/campaigns.html" class="btn bg-body text-success p-0">View All Campaigns 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_topbar_quick_link_3">
                                <!--begin::Items-->
                                <div class="px-9 pt-6 pb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/fox-hub.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Mivy App</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">CRM App tools application</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/atica.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Atica SR</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Antarcrtica based snow app</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/treva.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Avionica</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Flight Plan with Garmin Sync</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center item-border-hover px-3 py-2 ms-n3 mb-1">
                                        <img src="assets/media/svg/brand-logos/leaf.svg" class="w-25px me-5" alt="" />
                                        <div class="pe-2">
                                            <a href="#" class="fs-5 text-gray-800 text-hover-success fw-boldest">Leaf CRM</a>
                                            <div class="text-gray-400 fw-bold mt-1 fs-7">Awesome CRM apps &amp; tools</div>
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                                <!--begin::View more-->
                                <div class="py-5 text-center border-top">
                                    <a href="pages/projects/targets.html" class="btn bg-body text-success p-0">View All Targets 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Quick links-->
                <!--begin::Chat-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-active-light-success position-relative w-30px h-30px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                    </div>
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Chat-->
                <!--begin::Notifications-->
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Menu wrapper-->
                    <div class="btn btn-icon btn-active-light-success ?php echo $toolbarButtonHeightClass?&gt;" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-2.jpg')">
                            <!--begin::Title-->
                            <h3 class="pt-10 text-white fw-boldest fs-3 px-9">Notifications 
                            <span class="fs-7 fw-500 opacity-75 ps-3">24 reports</span></h3>
                            <!--end::Title-->
                            <!--begin::Tabs-->
                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch nav-tabs-light fw-bold px-9">
                                <li class="nav-item">
                                    <a class="nav-link pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">My Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Events</a>
                                </li>
                            </ul>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade pt-9" id="kt_topbar_notifications_1" role="tabpanel">
                                <!--begin::Item-->
                                <div class="d-flex align-items-center px-9 mb-4">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-success svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-success fw-bold">Developer Library added</a>
                                        <div class="text-gray-400 fw-bold fs-7">2 hours ago</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center px-9 mb-4">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                            <span class="svg-icon svg-icon-success svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M22 7H2V11H22V7Z" fill="black" />
                                                    <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-success fw-bold">Shopping/Credit-card.svg</a>
                                        <div class="text-gray-400 fw-bold fs-7">1 day ago</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center px-9 mb-4">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-success svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
                                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
                                                    <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-success fw-bold">New Order placed</a>
                                        <div class="text-gray-400 fw-bold fs-7">5 days ago</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center px-9 mb-4">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                            <span class="svg-icon svg-icon-success svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                    <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-success fw-bold">New user library added</a>
                                        <div class="text-gray-400 fw-bold fs-7">2 weeks ago</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="d-flex align-items-center px-9 mb-8">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-35px me-5">
                                        <span class="symbol-label">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                            <span class="svg-icon svg-icon-success svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Title-->
                                    <div class="mb-1 pe-3 flex-grow-1">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-success fw-bold">Developer Library added</a>
                                        <div class="text-gray-400 fw-bold fs-7">1 month ago</div>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item-->
                                <!--begin::View more-->
                                <div class="py-5 text-center border-top">
                                    <a href="pages/profile/activity.html" class="btn bg-body text-success p-0">View All 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column px-9">
                                    <!--begin::Section-->
                                    <div class="pt-12">
                                        <!--begin::Title-->
                                        <h2 class="text-dark text-center fw-boldest">Get Pro Access</h2>
                                        <!--end::Title-->
                                        <!--begin::Text-->
                                        <div class="text-center text-gray-500 fs-5 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
                                        <!--end::Text-->
                                        <!--begin::Action-->
                                        <div class="text-center mt-5 mb-9">
                                            <a href="#" class="btn btn-sm btn-success px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Get Pro Access</a>
                                        </div>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Section-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-5">
                                        <img src="assets/media/illustrations/sigma-1/2.png" alt="" class="mw-100 mh-175px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tab panel-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->
                <!--begin::User-->
                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-lg-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                        <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                    </div>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-success fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-5">Hello, Brand 
                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                    <a href="#" class="fw-bold text-muted text-hover-success fs-7">brad@kt.com</a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="pages/profile/overview.html" class="menu-link px-5">My Profile</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="account/settings.html" class="menu-link px-5">My Account</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="pages/projects/list.html" class="menu-link px-5">
                                <span class="menu-text">My Projects</span>
                                <span class="menu-badge">
                                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                </span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                            <a href="#" class="menu-link px-5">
                                <span class="menu-title position-relative">Language 
                                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
                                <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5 active">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
                                    </span>English</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                                    </span>Spanish</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                                    </span>German</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                                    </span>Japanese</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="account/settings.html" class="menu-link d-flex px-5">
                                    <span class="symbol symbol-20px me-4">
                                        <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                                    </span>French</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="menu-link px-5"><?php echo e(__('Deconnexion')); ?></a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <div class="menu-content px-5">
                                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="dark/index.html" />
                                    <span class="pulse-ring ms-n1"></span>
                                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                </label>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--end::Menu wrapper-->
                </div>
                <!--end::User -->
            </div>
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header--><?php /**PATH C:\Users\Sipoufo\Documents\Projects\adisa2\resources\views/layouts/header.blade.php ENDPATH**/ ?>