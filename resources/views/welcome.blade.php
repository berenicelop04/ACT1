<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #d3adf7;" class="font-sans antialiased">
    <div class="min-vh-100 d-flex justify-content-center align-items-center py-4">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="h3 font-weight-bold">Agencia de Niñeras</h2>
            </div>

            <div class="bg-white py-4 px-4 shadow-sm rounded-lg">
                <!-- Imagen de la empresa -->
                <img class="mx-auto d-block mb-4" src="https://e1.pxfuel.com/desktop-wallpaper/471/730/desktop-wallpaper-first-impressions-babysitter-anime.jpg" alt="Empresa de Niñeras">

                <!-- Botón para servicios -->
                <div class="mb-3">
                    <a href="{{ url('/bienvenida')}}" class="btn btn-primary btn-block">Ingresar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
