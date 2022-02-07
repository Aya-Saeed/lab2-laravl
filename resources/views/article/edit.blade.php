<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create article</title>
</head>
<body>
    <p>update article page</p>

    <form method="POST" action="/editarticle">
        @csrf
              <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{ $data['id']}}">
    
            Name: <input type="text" name="name" value="{{ $data['name'] }}">
            slug: <input type="text" name="slug" value="{{ $data['slug'] }}">
        description: <input type="text" name="description" value="{{ $data['description'] }}">
        is_used: <input type="boolean" name="is_used" value="{{ $data['is_used'] }}">
            <button type="submit">Submit</button>

        </form>

</body>
</html>