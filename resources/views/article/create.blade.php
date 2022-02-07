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

        Name: <input type="text" name="name"><br>
        <span>   @error('name'){{ $message }}@enderror</span><br>

        slug: <input type="text" name="slug"><br>
        <span>   @error('slug'){{ $message }}@enderror</span><br>

        description: <input type="text" name="description"><br>
        <span>   @error('description'){{ $message }}@enderror</span><br>

        is_used: <input type="boolean" name="is_used"><br>
        <span>   @error('is_used'){{ $message }}@enderror</span><br>
        cat_id
        <select name="cat_id">
            @foreach ($cat_ids as $categoryid )
                <option value="{{ $categoryid['id'] }}">{{ $categoryid['name'] }}</option>
            @endforeach
        </select>
        <span>   @error('cat_id'){{ $message }}@enderror</span><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>