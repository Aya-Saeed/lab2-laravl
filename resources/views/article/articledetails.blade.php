<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>article details</h3>

    <p>id:{{$art->id}}<p>
    <p>name:{{$art->name}}</p>
    <p>slug:{{$art->slug}}<p>
        <p>description:{{$art->description}}</p>
    <p>is_used:{{$art->is_used}}<p>
    <p>cat_id:{{$art->cat_id}}</p>

        
    <a href="/article">goback</a>
</body>
</html>