<nav class="layout-navbar navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme container-fluid"
    id="layout-navbar">

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-md"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <!-- Search -->
        <div class="navbar-nav align-items-center">
            <div class="nav-item navbar-search-wrapper mb-0">
                <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">
                    <i class="ti ti-search ti-md me-2 me-lg-4 ti-lg"></i>
                    <span class="d-none d-md-inline-block text-muted fw-normal">Search (Ctrl+/)</span>
                </a>
            </div>
        </div>
        <!-- /Search -->


        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <!-- Language -->
            <li class="nav-item dropdown-language dropdown">
                <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class='ti ti-language rounded-circle ti-md'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="en"
                            data-text-direction="ltr">
                            <span>English</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="fr"
                            data-text-direction="ltr">
                            <span>French</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);" data-language="ar"
                            data-text-direction="rtl">
                            <span>Arabic</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ Language -->

            <!-- Quick links  -->
            <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-3 me-xl-2">
                <a class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow"
                    href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class='ti ti-layout-grid-add ti-md'></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-menu-header border-bottom">
                        <div class="dropdown-header d-flex align-items-center py-3">
                            <h6 class="mb-0 me-auto">Shortcuts</h6>
                            <a href="javascript:void(0)"
                                class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                    class="ti ti-plus text-heading"></i></a>
                        </div>
                    </div>
                    <div class="dropdown-shortcuts-list scrollable-container">
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                    <i class="ti ti-calendar ti-26px text-heading"></i>
                                </span>
                                <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                <small>Appointments</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                    <i class="ti ti-file-dollar ti-26px text-heading"></i>
                                </span>
                                <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                <small>Manage Accounts</small>
                            </div>
                        </div>
                        <div class="row row-bordered overflow-visible g-0">
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                    <i class="ti ti-user ti-26px text-heading"></i>
                                </span>
                                <a href="app-user-list.html" class="stretched-link">User App</a>
                                <small>Manage Users</small>
                            </div>
                            <div class="dropdown-shortcuts-item col">
                                <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                    <i class="ti ti-users ti-26px text-heading"></i>
                                </span>
                                <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                <small>Permission</small>
                            </div>
                        </div>

                    </div>
                </div>
            </li>
            <!-- Quick links -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2">
                                    <div class="avatar avatar-online">
                                        <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">John Doe</h6>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-profile-user.html">
                            <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-account.html">
                            <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span
                                    class="flex-grow-1 align-middle">Billing</span>
                                <span
                                    class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-1 mx-n2"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-pricing.html">
                            <i class="ti ti-currency-dollar me-3 ti-md"></i><span class="align-middle">Pricing</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="pages-faq.html">
                            <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                        </a>
                    </li>
                    <li>
                        <div class="d-grid px-2 pt-2 pb-1">
                            <a class="btn btn-sm btn-danger d-flex" href="auth-login-cover.html" target="_blank">
                                <small class="align-middle">Logout</small>
                                <i class="ti ti-logout ms-2 ti-14px"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <!--/ User -->

        </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search...">
        <i class="ti ti-x search-toggler cursor-pointer"></i>
    </div>

</nav>
