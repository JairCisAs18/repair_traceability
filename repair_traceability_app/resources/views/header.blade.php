<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url ('styles/header-style.css') }}">
    <title>Reparación</title>
</head>
<div class="header container-sm mt-2 d-flex justify-content-around align-items-center border border-4 rounded-top">
    <img src="{{ url('/images/logo.png') }}" alt="">
    <h3>Sistema de trazabilidad para la reparación de piezas</h3>
</div>
<div class="menu container-sm d-flex justify-content-around align-items-center border border-4 border-top-0 rounded-bottom p-0">
        <div class="col-4 h-100 d-flex justify-content-center align-items-center"><a href="/"><h4>Entradas</h4></a></div>
        <div class="col-4 h-100 d-flex justify-content-center align-items-center"><a href="/scrap-parts"><h4>Scrap</h4></a></div>
        <div class="col-4 h-100 d-flex justify-content-center align-items-center"><a href="/repaired-parts"><h4>Reparadas</h4></a></div>
</div>
</html>