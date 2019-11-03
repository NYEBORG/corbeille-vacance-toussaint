<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Create Article</title>
    </head>
    <body>
  
        <form method="post" action="/shoes">
            @csrf   <!-- permet sécuriser le formulaire -->
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" required>
            <label for="price">Price: </label>
            <input type="number" id="price" name="price" required>
            <label for="description">Description: </label>
            <textarea id="description" name="description" required></textarea>
            <button type="submit">Submit</button>
        </form>

    </body>


</html>