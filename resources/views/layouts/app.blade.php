<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ ($title) ? $title : '' }} - Personal Dashboard</title>

    @vite(['resources/sass/app.scss'])
</head>
<body id="app">
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">Personal Dashboard</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('home') }}">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Water Intake</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Health</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Gaming</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shows & Movies</a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom top-navbar">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid p-4">
            @yield('content')
        </div>
    </div>
</div>

@vite(['resources/js/app.js'])
</body>
</html>
