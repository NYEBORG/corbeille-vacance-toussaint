<!DOCTYPE html>
<html>
    <head>
        <title>Shoe {{ $shoe->id }}</title>
    </head>
    <body>
        <h1>Shoe {{ $shoe->id }}</h1>
        <ul>
            <li>Name: {{ $shoe->name }}</li>
            <li>Price: {{ $shoe->price }}</li>
            <li>Description: {{ $shoe->description }}</li>
            <li>Produced on: {{ $shoe->produced_on}}</li>
        </ul>
    </body>
</html>