<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <h1>Hello, {{ $name }}</h1>
        <a href="{{route('student.excel')}}">student_excel</a>
        <a href="{{route('student.child')}}">student_child</a>

        @php
        dd($data);
        @endphp

        @foreach ($data as $user)
        <p>{{ $user['name'] }}</p>
        @endforeach

        

</body>
</html>
