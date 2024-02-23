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
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('workouts') }}">Workouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('appointment') }}">Meet Doctor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('appointment') }}">Meet Trainer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('meals') }}">Meals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Goals</a>
                </li>
                {{--  ///////////////---patient---//////////////////  --}}


                {{--  ///////////////---trainer---//////////////////  --}}
                {{--  <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">My Workouts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Live sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('goals') }}">Feedback</a>
                </li>  --}}
                {{--  ///////////////---trainer---//////////////////  --}}


                {{--  ///////////////---doctor---//////////////////  --}}
                {{--  <li class="nav-item">
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
                </li>  --}}
                {{--  ///////////////---docctor---//////////////////  --}}
            </ul>
        </div>


        <!-- Right Side Profile Icon -->
        <div class="profile-icon">
            <a href="{{ url('goals') }}">
                <img src="{{ url('assets/img/user.png') }}" alt="Profile Icon">
            </a>
        </div>
    </div>
</nav>
