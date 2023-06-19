<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center my-4">{{$category->name}}</h1>
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-4 mt-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="{{$announcement->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        {{-- riempire l'href --}}
                        
                        <p class="card-text">Categoria: {{$announcement->category->name}}</p>
                        <p class="card-text">Prezzo: €{{$announcement->price}}</p>
                        <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                        <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12 text-center my-5">
                    <p class="h4">Non sono presenti annunci per questa categoria!</p>
                    <p class="h2 my-4"><a class="btn btn-success shadow" href="{{route('announcement.create')}}">Pubblicane uno</a></p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>