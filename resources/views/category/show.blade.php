<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>category details</h3>

    <p>id:{{$cat->id}}</p>
    <p>name:{{$cat->name}}</p>


    <h2>article details</h2>
    <ul>
        @forelse($cat->categorymodel as $model)
        <li>
            {{ $model['name'] }}
           
        </li>
        <li>
            {{ $model['description'] }}
        </li>
        <li>
            {{ $model['is_used'] }}
        </li>
        <li>
            {{ $model['slug'] }}
        </li>
        <li>
            {{ $model['cat_id'] }}
        </li>
        @empty
        <p>
            article not found
        </p>
        @endforelse

    </ul>


    <a href="/">goback</a>
</body>

</html>