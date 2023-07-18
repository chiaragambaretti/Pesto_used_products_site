<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center mt-5">La tua Area Privata</h1>
                <h2 class="mt-5 text-center">Gestisci i tuoi annunci</h2> 
                <div class="d-flex justify-content-center mt-5 mb-5">
                    <a class="btn btn-profilo mb-4 mt-4 me-5 w-25" href="{{route('announcement.create')}}">Inserisci un nuovo annuncio</a>
                    <a class="btn btn-profilo mb-4 mt-4 ms-5 w-25" href="{{route('user.dashboard')}}">Gestisci i tuoi annunci</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mb-5">
        <div class="row">
            @foreach(Auth::user()->announcements as $announcement)
                <x-cardAnnunci :announcement="$announcement"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>