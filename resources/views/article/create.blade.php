<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create article</title>
</head>
<body>
    <p>Create article page</p>
    <form method="POST" action="{{  route('articles.save') }}">
    @csrf

        Name: <input type="text" name="name">
        slug: <input type="text" name="slug">
        description: <input type="text" name="description">
        is_used: <input type="boolean" name="is_used">
        cat_id<input type="text" name="cat_id">
        <button>Submit</button>
    </form>
</body>
</html>