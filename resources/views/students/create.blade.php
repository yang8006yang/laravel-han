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

 <h1>CREATE</h1>

  <form action="{{route('students.store')}}" method="post">
    @csrf
    <label for="name">姓名:</label>
    <input type="text" name="name" id="">
    <label for="age">年齡:</label>
    <input type="text" name="age" id="">

    <input type="submit" value="新增">
  </form>
  <a href="{{route('students.index')}}" class="btn btn-success">返回</a>

</body>
</html>
