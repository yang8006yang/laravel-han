<!-- resources/views/layouts/app.blade.php -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>大飯店 - @yield('title')</title>
</head>
<body>
        <div class="container">
            @yield('content')
        </div>

        @section('sidebar')
        <a href="{{route('hotels1')}}">1F</a>
        <a href="{{route('hotels2')}}">2F</a>
        <a href="{{route('hotels3')}}">3F</a>
        This is the master sidebar.
        @show
</body>
</html>