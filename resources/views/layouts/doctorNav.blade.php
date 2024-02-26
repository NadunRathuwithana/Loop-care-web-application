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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Feedback</a>
                </li>
            </ul>
        </div>


        <!-- Right Side Profile Icon -->
        <div class="dropdown">
            <button class="btn btn-warning avatar p-0 bg-transparent border-0 shadow-none" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="rounded-circle" src="{{ url('https://mighty.tools/mockmind-api/content/human/57.jpg') }}" alt="Profile Icon">
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="#">
                        <div class="d-flex">
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
                                <!-- user role -->
                                <small class="text-muted">Trainer</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="#">
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
