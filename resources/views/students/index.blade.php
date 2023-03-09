<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Basic Table</h2>
    <a href="{{route('students.create')}}" class="btn btn-success">單筆新增</a>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>age</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $user)
      <tr>
        <td>{{ $user['id'] }}</td>
        <td>{{ $user['name'] }}</td>
        <td>{{ $user['age'] }}</td>
        <td></td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

{{-- <h1>Hello, {{ $name }}</h1>
<a href="{{route('student.excel')}}">student_excel</a>
<a href="{{route('student.child')}}">student_child</a>

@foreach ($data as $user)
<p>{{ $user['name'] }}</p>
@endforeach
<h1>123</h1>

@php
dd($data);
@endphp --}}
</body>
</html>
