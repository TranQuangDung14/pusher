<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tạo</h1>
    <form action="{{route('user_post_save')}}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <label for="author">author:</label>
        <input type="text" name="author" id="author">

        <button type="submit">submit</button>
    </form>
</body>
</html>
