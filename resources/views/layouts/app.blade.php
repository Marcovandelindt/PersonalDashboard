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
@yield('content')

@vite(['resources/js/app.js'])
</body>
</html>
