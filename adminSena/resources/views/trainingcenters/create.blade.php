<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('trainingcenter.store')}}" method="POST">
        @csrf
        <label for="name">
            Nombre:
            <input type="text" name="name" id="name" required>
        </label>
        <br>
        <br>
        <label for="location">
            Ubicación:
            <input type="text" name="location" id="location" required>
        </label>
        <br>
        <br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>