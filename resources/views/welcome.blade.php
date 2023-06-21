<x-layout>
<x-header></x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session()->has('access.denied'))
                <div class="alert alert-danger">
                    {{ session('access.denied') }}
                </div>
                @endif
            </div>
        </div>
    </div>
 
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center">PRESTO.IT</h1>
            @foreach ($announcements as $announcement)

           <x-card :announcement="$announcement"></x-card>

            @endforeach
        </div>
    </div>
</x-layout>