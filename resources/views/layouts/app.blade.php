<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Roles Management') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    .navbar-nav {
        display: flex;
        flex-direction: row;
    }
    .nav-item {
        margin-right: 10px; /* Optional: Add some spacing between the items */
    }
</style>
<body>
    <div class="container mt-5">
        @if(Auth::check())
		    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		        @csrf
		    </form>
		    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
		@endif

        @if(Auth::check() && Auth::user()->hasRole('admin'))
        <ul class="navbar-nav mr-auto">
                
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('permissions.index') }}">Permissions</a>
            </li>
                
        </ul>
        @endif

        @yield('content')
    </div>
</body>
</html>
