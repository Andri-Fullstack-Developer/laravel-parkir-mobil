{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::guard('adminMiddle')->user()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.logout')}}">{{__('logout')}}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}

<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="#">
                <img src="{{ asset('dash/img/logo.svg') }}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('dash/img/iconfoto.png') }}" width="30" alt="logo" />
                <div class="dropdown dropdown-menu-right navbar-dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="{{ asset('dash/img/iconfoto.png') }}" width="50"
                                alt="Profile image" />
                            <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::guard('adminMiddle')->user()->name }}</p>
                            <p class="fw-light text-muted mb-0">Andriamto@gmail.com</p>
                            <a href="{{ route('admin.logout') }}"class="dropdown-item"><i
                                    class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('logout') }}</a>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Welcome,<span class="text-black fw-bold">To Panel Admin</span></h1>
                {{-- <h3 class="welcome-sub-text">Your performance summary this week</h3> --}}
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <!-- Select -->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown"
                    href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>

            </li>
            <!-- Select end -->

            <!-- Calender -->
            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                    <span class="input-group-addon input-group-prepend border-right">
                        <span class="icon-calendar input-group-text calendar-icon"></span>
                    </span>
                    <input type="text" class="form-control" />
                </div>
            </li>
            <!-- Calender end -->

            <!-- Search -->
            <li class="nav-item">
                <form class="search-form" action="#">
                    <i class="icon-search"></i>
                    <input type="search" class="form-control" placeholder="Search Here" title="Search here" />
                </form>
            </li>
            <!-- Search end -->
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{ asset('dash/img/iconfoto.png') }}" width="50"
                        alt="Profile image" /> </a>
                <div class="dropdown dropdown-menu-right navbar-dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="{{ asset('dash/img/iconfoto.png') }}" width="50"
                                alt="Profile image" />
                            <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::guard('adminMiddle')->user()->name }}</p>
                            <p class="fw-light text-muted mb-0">Andriamto@gmail.com</p>
                            <a href="{{ route('admin.logout') }}"class="dropdown-item"><i
                                    class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('logout') }}</a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
