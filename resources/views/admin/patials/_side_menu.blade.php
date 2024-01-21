<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Loop Care</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Management</span>
        </li>

        <!-- User Management -->
        <!-- <li class="menu-item">

            <a href="index.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div data-i18n="Analytics">User Management</div>
            </a>
          </li> -->

        <!-- workout Management -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-dumbbell"></i>
                <div data-i18n="Analytics">Workout Management</div>
            </a>
        </li>

        <!-- Meal Management -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Analytics">Meal Management</div>
            </a>
        </li>

        <!-- Goal Management -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-medal"></i>
                <div data-i18n="Analytics">Goal Management</div>
            </a>
        </li>

        <!-- Sign Up Management -->
        <li class="menu-item">
            <!-- link -->
            <a href="{{ url('signup_management') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-arrow-to-right"></i>
                <div data-i18n="Analytics">Sign Up Management</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Live</span>
        </li>

        <!-- Appointment -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-health"></i>
                <div data-i18n="Analytics">Appointments</div>
            </a>
        </li>

        <!-- Live session -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-tv"></i>
                <div data-i18n="Analytics">Live Sessions</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports & Other</span>
        </li>

        <!-- Review Management -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-star"></i>
                <div data-i18n="Analytics">Customer Reviews</div>
            </a>
        </li>

        <!-- Reports -->
        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-stats"></i>
                <div data-i18n="Analytics">Reports</div>
            </a>
        </li>

        <!-- Admin Controller -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Account Settings">User Management</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('add_user') }}" class="menu-link">
                        <div data-i18n="Account">Add Users</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('user_management') }}" class="menu-link">
                        <div data-i18n="Notifications">Manage Users</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>

        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Analytics">Account Settings</div>
            </a>
        </li>

        <li class="menu-item">
            <!-- link -->
            <a href="index.html" class="menu-link text-danger">
                <i class="menu-icon tf-icons bx bx-log-out"></i>
                <div data-i18n="Analytics">Logout</div>
            </a>
        </li>
    </ul>
</aside>
