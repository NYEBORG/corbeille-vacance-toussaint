<!doctype html>
<head>
    <meta charset = "utf-8">
    <title>Edit shoe</title>

</head>
<body>
<form method='post' action='/shoes/{{$shoe -> id}}'>
    @method('PUT')
    @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required value="{{$shoe->name}}">
        <label for="price">Price: </label>
        <input type="number" id="price" name="price" required value="{{$shoe->price}}">
        <label for="description">Description: </label>
        <textarea id="description" name="description" required>{{$shoe->description}}</textarea>
        <button type="submit">Submit</button>
</form>

</body>
