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
    
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                @if (session()->has('message'))
                <div class="alert alert-success mt-5">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    <main>

        {{$slot}}
        
    </main>
    
    <x-footer/>
    
    <!-- JS FONT AWESOME -->
    <script src="https://kit.fontawesome.com/5437d26fd6.js" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>