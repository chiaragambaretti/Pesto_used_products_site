<x-layout>
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center">Tutti gli annunci</h1>
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-4 mt-5 justify-content-center d-flex">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="{{$announcement->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$announcement->title}}</h5>   
                        <p class="card-text">Categoria: <a href="{{route('categoryShow', ['category'=>$announcement->category])}}"> {{$announcement->category->name}}</a></p>
                        <p class="card-text">Prezzo: €{{$announcement->price}}</p>
                        <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                        <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            </div>
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