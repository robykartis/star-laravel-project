<header id="page-header ">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="space-x-1 d-flex align-items-center space-x-2">
            <!-- Logo -->
            <a class="link-fx fw-bold" href="index.html">
                <i class="fa fa-fire text-primary"></i>
                <span class="fs-4 text-dual">{{ config('app.name') }}</span>
            </a>
            <!-- END Logo -->

            <!-- Version -->
            <span class="d-inline-block fs-xs fw-medium bg-primary-dark text-white rounded-pill py-1 px-2">1.0</span>
            <!-- END Version -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="btn btn-alt-secondary px-3" data-toggle="layout" data-action="dark_mode_toggle"
                href="javascript:void(0)">
                <i class="fa fa-moon"></i>
            </a>
            @auth
                <a class="btn btn-alt-success px-3" href="{{ url('/home') }}">
                    <i class="fa fa-shopping-bag opacity-50"></i>
                    <span class="ms-1 d-none d-sm-inline-block">Home</span>
                </a>
            @else
                <a class="btn btn-alt-success px-3" href="{{ route('auth.login') }}">
                    <i class="fa fa-shopping-bag opacity-50"></i>
                    <span class="ms-1 d-none d-sm-inline-block">Login</span>
                </a>

                <a class="btn btn-alt-success px-3" href="{{ route('auth.register') }}">
                    <i class="fa fa-shopping-bag opacity-50"></i>
                    <span class="ms-1 d-none d-sm-inline-block">Register</span>
                </a>
                {{-- @if (Route::has('register'))
                @endif --}}
            @endauth
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
