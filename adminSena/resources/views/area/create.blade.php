<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Area</h1>
    
    <form action="{{route('area.store')}}" method="POST">
        @csrf
        <label for="name">
            Nombre
            <input type="text" name="name" id="name" required>
        </label>
        <br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>