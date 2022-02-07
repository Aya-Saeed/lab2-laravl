<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <p>update Category page</p>
    <form method="POST" action="/edit">
    @csrf
          <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="{{ $data['id']}}">

        Name: <input type="text" name="name" value="{{ $data['name'] }}">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>