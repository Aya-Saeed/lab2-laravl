<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <p>Create Category page</p>
    <form method="POST" action="{{  route('categories.save') }}">
    @csrf
        Name: <input type="text" name="name">
        
        <button>Submit</button>
    </form>
</body>
</html>