<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        @if(Auth::check())
		    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		        @csrf
		    </form>
		    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
		@endif

        @yield('content')
    </div>
</body>
</html>
