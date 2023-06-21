<x-layout>
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center">Tutti gli annunci</h1>
            @forelse ($announcements as $announcement)
            <x-card :announcement="$announcement"></x-card>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Non ci sono annunci per questa ricerca. Prova a cambiarla.</p>
                    </div>
                </div>
            @endforelse
            <div class="row my-5">
                <div class="col-12 d-flex justify-content-center">
                    {{$announcements->links()}}
                </div>             
            </div>
        </div>
    </div> 
</x-layout>