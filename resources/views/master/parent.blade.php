<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/parent.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 bg-secondary">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('kota.index') }}">Kota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('price.index') }}">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('type.index') }}">Type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('event.index') }}">Event</a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4">
                <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
                    <a class="navbar-brand" href="#">@yield('title')</a>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('index') }}">website</a>
                        </li>
                    </ul>
                </nav>
                <div class="container mt-4">
                    <h2>@yield('content - title')</h2>
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
