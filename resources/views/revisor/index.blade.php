<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                {{-- verifica la presenza di annunci da revisionare --}}
                {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    <div class="container my-5">
        <div class="row ">
            <div class="col-12 col-md-6">
                <div id="carouselExampleCaptions" class="carousel slide">
                    @if (count($announcement_to_check->images))
                    <div class="carousel-inner">
                        @foreach ($announcement_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{$image->getUrl(800 , 700)}}" class="img-fluid p-3 rounded" alt="{{$announcement_to_check->title}}">
                        </div>
                        @endforeach
                    </div>
                    @else            
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1200/600" class="img-fluid rounded" alt="{{$announcement_to_check->title}}"> 
                        </div>
                        
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1200/601" class="img-fluid rounded" alt="{{$announcement_to_check->title}}">
                        </div>
                        
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1200/603" class="img-fluid rounded" alt="{{$announcement_to_check->title}}">
                        </div>  
                    </div>
                    @endif    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <a href="{{route('categoryShow', ['category'=>$announcement_to_check->category])}}">{{$announcement_to_check->category->name}}</a>
                <p>{{$announcement_to_check->user->name ?? ''}}</p>     
                <p>{{$announcement_to_check->created_at}}</p>
                <h1>{{$announcement_to_check->title}}</h1>
                <p>Prezzo: € {{$announcement_to_check->price}}</p>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 col-md-6">
                <h3>Descrizione</h3>
                <p>{{$announcement_to_check->body}}</p>
            </div>
        </div>
        <div class="row">
            {{-- collegato alla rotta accetta --}}
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            {{-- collegato alla rotta rifiuta --}}
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>