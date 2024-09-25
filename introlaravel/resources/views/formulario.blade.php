[6:54 p.m., 24/9/2024] Monse Leon: <?php

use Illuminate\Support\Facades\Route;

//RUTA TIPO GET
/* Route::get('/', function () {
    return view('welcome');
}); */

// RUTA TIPO VIEW
Route::view('/','welcome');


//CREACION DE RURTA DE NUESTRO FORMULARIO DE VISTA 
//RUTA TIPO VIEW
Route::view('/form','formulario');
[6:55 p.m., 24/9/2024] Monse Leon: <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Formulario</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Turista sin maps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Registro de Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Consultar Clientes</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</body>
</html>