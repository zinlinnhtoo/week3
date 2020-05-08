<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Class')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home page</a></li>
        <li><a href="php">PHP page</a></li>
        <li><a href="js">JS page</a></li>
    </ul>
    @yield('content')
</body>
</html>
