<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title ?? 'Presto.it'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    
    <x-navbar/>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    
    {{$slot}}
    
    <x-footer/>
    
    @livewireScripts
</body>
</html>