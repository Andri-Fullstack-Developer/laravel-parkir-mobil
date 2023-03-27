<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div>
            <a class="navbar-brand brand-logo" href="#">
                <img src="{{ asset('dash/img/logo.svg') }}" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav ms-auto">
            <!-- Select -->
            <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown"
                    href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            </li>
            <!-- Select end -->

            <!-- Calender -->
            <li class="nav-item d-lg-block">
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

            <li class="nav-item dropdown d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{ asset('dash/img/iconfoto.png') }}" width="50"
                        alt="Profile image" /> </a>
                <div class="dropdown dropdown-menu-right navbar-dropdown">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="{{ asset('dash/img/iconfoto.png') }}" width="50"
                                alt="Profile image" />
                            <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::guard('adminMiddle')->user()->name }}</p>
                            <p class="fw-light text-muted mb-0">{{ Auth::guard('adminMiddle')->user()->email }}</p>
                            <a href="{{ route('admin.logout') }}"class="dropdown-item"><i
                                    class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>{{ __('logout') }}</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
