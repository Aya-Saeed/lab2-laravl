<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categories</title>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      
      tr:nth-child(even) {
        background-color: #dddddd;
      }
      </style>
</head>
<body>
  <h2>Create article <a href="/createarticle">here</a></h2>
    <h1>article</h1>
    <table class="table table-striped" style="border: 1">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">cat_id</th>
            <th scope="col">description</th>
            <th scope="col">is_used</th>
            <th scope="col">slug</th>
            <th scope="col">btn 1</th>
            <th scope="col">btn 2</th>
            <th scope="col">btn 3</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($art as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item ->name }}</td>
                    <td>{{ $item->cat_id }}</td>
                    <td>{{ $item ->description }}</td>
                    <td>{{ $item->is_used }}</td>
                    <td>{{ $item ->slug }}</td>
                    <td><a href= "/deletearticle/{{ $item->id }}">delete</a></td>
                    <td><a href= {{ "editarticle/". $item['id']}}>edit</a></td>
                    <td><a href= "/articles/{{ $item->id }}">show</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>