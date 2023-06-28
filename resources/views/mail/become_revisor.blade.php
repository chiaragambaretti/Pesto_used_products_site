<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    {{-- link css --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <div class="container d-flex justify-content-center mt-5 header-become">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5">Un utente ha richiesto di lavorare con noi!</h1>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">L'utente <strong>{{$user->name}}</strong> ha richiesto di diventare revisore</h3>
                <h3 class="text-center mt-3"> <strong> Email:</strong> {{$user->email}}</h3>
            
                <div class="d-flex justify-content-center">
                    <a class="m-4" href="{{route('make.revisor', compact('user'))}}"><button class="btn btn-makerevisor">Rendi revisore</button></a>
                </div> 

            </div>
        </div>
    </div>
</body>
</html>