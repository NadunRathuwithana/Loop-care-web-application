<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <!-- Navbar Brand (Left Side Logo) -->
        <a class="navbar-brand" href="/">
            <img src="{{ url('assets/img/navBlack.png') }}" alt="Logo">
        </a>

        <!-- Responsive Navigation Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Centered Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                {{--  ///////////////---patient---//////////////////  --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('workouts') ? 'active' : '' }}"
                        href="{{ url('workouts') }}">Workouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('appointment') ? 'active' : '' }}"
                        href="{{ url('appointment') }}">Meet Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('appointment') ? 'active' : '' }}"
                        href="{{ url('appointment') }}">Meet Trainer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('meals') ? 'active' : '' }}" href="{{ url('meals') }}">Meals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('goals') ? 'active' : '' }}"
                        href="{{ url('goals') }}">Goals</a>
                </li>
                {{--  ///////////////---patient---//////////////////  --}}
            </ul>
        </div>


        <!-- Right Side Profile Icon -->
        <div class="dropdown">
            <button class="btn btn-warning avatar p-0 bg-transparent border-0 shadow-none" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="{{ url('https://mighty.tools/mockmind-api/content/human/57.jpg') }}"
                    alt="Profile Icon">
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                    <!-- user image -->
                                    <img src="https://mighty.tools/mockmind-api/content/human/57.jpg" alt
                                        class="rounded-circle" />
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <!-- user name -->
                                <span class="fw-semibold d-block">John Doe</span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ url('profile') }}">
                        <i class="fa-regular fa-user me-2"></i>
                        <!-- my profile -->
                        <span class="align-middle">My Profile</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <!-- logout -->
                    <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                        <span class="align-middle">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
