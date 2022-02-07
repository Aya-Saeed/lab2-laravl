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
    <h1>categories</h1>
    <h2>Create Category <a href="/create">here</a></h2>
    <table class="table table-striped" style="border: 1">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">btn 1</th>
            <th scope="col">btn 2</th>
            <th scope="col">btn 3</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($catego as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item ->name }}</td>
                    <td>
                      <form method="POST" action="{{ "delete/" .$item['id'] }}">
                        @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <button type="submit">delete</button>
                      </form>
                    </td>
                    <td><a href= {{ "edit/". $item['id']}}>edit</a></td>
                    <td><a href= "/categories/{{ $item->id }}">show</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>