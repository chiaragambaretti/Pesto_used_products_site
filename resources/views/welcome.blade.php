<x-layout>
    <div class="container">
        <div class="row my-5">
            @foreach ($announcements as $announcement)
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
            @endforeach
        </div>
    </div>
</x-layout>