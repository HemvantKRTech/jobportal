 <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="{{ route('admin.dashboard.index') }}" class="logo logo-dark">
                        <span class="logo-sm">

                            <img src="{{asset(get_app_setting('logo')??'assets/images/logo-dark.png')}}" alt="">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset(get_app_setting('logo')??'assets/images/logo-dark.png')}}" alt="">

                        </span>
                    </a>

                    <a href="{{ route('admin.dashboard.index') }}" class="logo logo-light">
                        <span class="logo-sm">

                            <img src="{{asset(get_app_setting('logo')??'assets/images/logo-dark.png')}}" alt="">
                        </span>
                        <span class="logo-lg">
                           <img src="{{asset(get_app_setting('logo')??'assets/images/logo-dark.png')}}" alt="">
                        </span>
                    </a>
                </div>

                <button type="button" class="px-3 btn btn-sm fs-16 header-item vertical-menu-btn topnav-hamburger"
                    id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!--<div class="ms-1 header-item d-none d-sm-flex">-->
                <!--    <a href="{{ url('/') }}" title="View Site" target="_blank" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle">-->
                <!--        <i class='bx bx-show fs-22'></i>-->
                <!--    </a>-->
                <!--</div>-->


              
            </div>

            <div class="d-flex align-items-center">

               

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                        data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

              

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{asset(getAdmin('avatar')??'assets/images/users/avatar-1.jpg')}}"
                                alt="{{getAdmin('name')}}">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{getAdmin('name')}}</span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{getAdmin('role')}}</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome {{getAdmin('name')}}!</h6>
                        <a class="dropdown-item" href="{{route('admin.profile')}}"><i
                                class="align-middle mdi mdi-account-circle text-muted fs-16 me-1"></i> <span
                                class="align-middle">Profile</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                class="align-middle mdi mdi-logout text-muted fs-16 me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>