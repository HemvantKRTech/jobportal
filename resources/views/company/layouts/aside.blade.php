<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.dashboard.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset(get_app_setting('favicon')??'assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset(get_app_setting('logo')??'assets/images/logo-dark.png')}}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.dashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset(get_app_setting('favicon')??'assets/images/logo-sm.png')}}" alt="" width="40">
            </span>
            <span class="logo-lg">
                <img src="{{asset(get_app_setting('logo')??'assets/images/logo-light.png')}}" alt="" width="140">
            </span>
        </a>
        <button type="button" class="p-0 btn btn-sm fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

   
    <div class="sidebar-background"></div>
</div>