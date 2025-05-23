<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="    background-color:aquamarine; display: flex; justify-content: center; align-items: center; height: 90vh;">
    <div style="    background-color: white; text-align: center; width: 500px; height: 350px; border-radius: 20px; box-shadow: -50px 50px 10px black;">
        @yield('content')
    </div>
    <div style="position: absolute; left: 100px">
    @include('includes.footer')
    </div>
</body>
</html>