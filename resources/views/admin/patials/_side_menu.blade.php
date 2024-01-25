<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('admin') }}" class="app-brand-link">
            <img class="img-fluid" src="assets/img/navPrimary.png" alt="" style="padding: 20px;">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        {{--  Dashboard  --}}
        <li class="menu-item  {{ Request::is('admin') ? 'active' : '' }}">
            <a href="{{ url('admin') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Management</span>
        </li>

        {{--  workout Management  --}}
        <li class="menu-item {{ Request::is('workout_management') ? 'active' : '' }}">
            <!-- link -->
            <a href="{{ url('workout_management') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dumbbell"></i>
                <div data-i18n="Analytics">Workout Management</div>
            </a>
        </li>

        {{--  Meal Management  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Analytics">Meal Management</div>
            </a>
        </li>

        {{--  Goal Management  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-medal"></i>
                <div data-i18n="Analytics">Goal Management</div>
            </a>
        </li>

        {{--  Sign Up Management  --}}
        <li
            class="menu-item {{ Request::is('pending_request') || Request::is('all_users') || Request::is('questions_setup') ? 'active' : '' }}">
            <!-- link -->
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-arrow-to-right"></i>
                <div data-i18n="Analytics">User Management</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ Request::is('pending_request') ? 'active' : '' }}">
                    <a href="{{ url('pending_request') }}" class="menu-link">
                        <div data-i18n="Without menu">Pending Requests</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('all_users') ? 'active' : '' }}">
                    <a href="{{ url('all_users') }}" class="menu-link">
                        <div data-i18n="Without navbar">All Users</div>
                    </a>
                </li>
                <li class="menu-item {{ Request::is('questions_setup') ? 'active' : '' }}">
                    <a href="{{ url('questions_setup') }}" class="menu-link">
                        <div data-i18n="Container">Question Setup</div>
                    </a>
                </li>
            </ul>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Live</span>
        </li>

        {{--  Appointment  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-health"></i>
                <div data-i18n="Analytics">Appointments</div>
            </a>
        </li>

        {{--  Live session  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-tv"></i>
                <div data-i18n="Analytics">Live Sessions</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports & Other</span>
        </li>

        {{--  Review Management  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div data-i18n="Analytics">Customer Reviews</div>
            </a>
        </li>

        {{--  Reports  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-stats"></i>
                <div data-i18n="Analytics">Reports</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>

        {{--  Manage Users  --}}
        <li class="menu-item {{ Request::is('user_management') ? 'active' : '' }}">
            <a href="{{ url('user_management') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">Admin Management</div>
            </a>
        </li>

        {{--  Account Settings  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Analytics">Account Settings</div>
            </a>
        </li>

        {{--  Logout  --}}
        <li class="menu-item {{ Request::is('') ? 'active' : '' }}">
            <!-- link -->
            <a href="index.html" class="menu-link text-danger">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Analytics">Logout</div>
            </a>
        </li>
    </ul>
</aside>
