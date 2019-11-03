<!DOCTYPE html>
<html>
    <head>
        <title>Shoes</title>
    </head>
    <body>
    @foreach ($shoes as $shoe)
    <h1>Shoe {{ $shoe->id }}</h1>
    <ul>
    <li>Name: {{ $shoe->name }}</li>
    <li>Price: {{ $shoe->price }}</li>
    <li>Description: {{ $shoe->description }}</li>
    <li>Produced on: {{ $shoe->produced_on }}</li>
    </ul>
    @endforeach
    </body>
    </html>