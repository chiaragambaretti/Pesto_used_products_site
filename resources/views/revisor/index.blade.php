<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mt-5 text-center fs-2">
                {{-- verifica la presenza di annunci da revisionare --}}
                {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    {{-- AGGIUSTARE LA VISTA CON I DFLEX E I JUSTIFY --}}
    <div class="container my-5">
        <div class="row ">
            <div class="col-12 col-md-5">
                <div id="carouselExampleCaptions" class="carousel slide">
                    @if (count($announcement_to_check->images))
                    <div class="carousel-inner">
                        @foreach ($announcement_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{$image->getUrl(800 , 700)}}" class="img-fluid p-3 rounded" alt="{{$announcement_to_check->title}}">
                        </div>
                        @endforeach
                    </div>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    @else            
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAYFBMVEXDw8MAAABwcHDHx8eKioqkpKS8vLzGxsatra3KysqQkJCenp6AgIB3d3dra2u3t7dZWVlMTEyysrIsLCxTU1NDQ0OUlJQhISEyMjJlZWUMDAw9PT2Dg4N0dHQYGBhGRkaaAXj3AAACVklEQVR4nO3a63KiQBBAYbATxxYQbxtNdjd5/7dMIFwEGbaA1Fo05/tpNFVzZJgBCQIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICFEdFJROTRQ5jKxbvVRLF79CCmkW043XbeEeTpBxo8zXs2ZA2i9RSRiQbPUw5l90wDUw2cqIyIYamBHpP9Lho+GEMNNM7P8IfB/8BOg2qbcNaB/8BQg2qt3ww8J5hpkA2kkAwcj50GUdVgN3AymGkQpPW+1zMXfFeHdhror7LBuvt9GsXHzpHaaVAdCC/dw9FddnnYNU0MNXDp4WuUp6j7bCAv3jXDUIPAabo5eia9K46SS9ffDDX44nxbA7kWM2V/f5gYa+CTnwyKVeMuwjIaSL15CMNj+72LaODWt7fNTotsUG8dcq+t2bCEBpq0bqC2dhA2G4ho/cLN1VT3TtJkA00u57R8xQVvdw2ujdlgsYGusnGWEfRwl6B1aWmwQbEQ/v4elf7pSBCGt7cdDTYoF8K/2XftNp0JGqcEew3qhTD7rt27p8FHPRvMNbhZCN/Wge49CcIwqSJYa9BYCD+07yfpxmcsNQgax/6qJ0H4Xn7EWAM99426pfwhwlYDz0LoU1xGm2rgXQh9vu+smWoQXAY2uJhr0LMQ+uR31gw1GPVs1lZMNUj/PeIOqaUGchrV4Cp2GujrqATZZbSVBr274n5bNdJANuOJjQY8ozl6GtRm3sD9yDPb824QuHjqo/ureOYJ8p8TZKJHDwEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOB/+wQBph2Iu8J1cQAAAABJRU5ErkJggg==" alt="immagine di default">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-3 mt-3">
                <a class="btn btn-color-show" href="{{route('categoryShow', ['category'=>$announcement_to_check->category])}}">{{$announcement_to_check->category->name}}</a>
                <p class="mt-3"><span class="h4">Inserito da: </span>{{$announcement_to_check->user->name ?? ''}}</p>     
                {{-- <p>{{$announcement_to_check->user->name ?? ''}}</p>      --}}
                <p><span class="h4">Pubblicato il: </span>{{$announcement_to_check->created_at}}</p>
                {{-- <p>{{$announcement_to_check->created_at}}</p> --}}
                <p><span class="h4">Titolo: </span>{{$announcement_to_check->title}}</p>
                <p class="h4">Prezzo: € {{$announcement_to_check->price}}</p>
            </div>
            @if (count($announcement_to_check->images))
            <div class="col-md-3 mt-3">
                <div class="card-body">
                    <h5 class="tc-accent">Revisione Immagini</h5>
                    <p>Adulti: <span class="{{$image->adult}}"></span></p>
                    <p>Satira: <span class="{{$image->spoof}}"></span></p>
                    <p>Medicina: <span class="{{$image->medical}}"></span></p>
                    <p>Violenza: <span class="{{$image->violence}}"></span></p>
                    <p>Contenuto Ammiccante: <span class="{{$image->racy}}"></span></p>
                </div>
            </div>
            <div class="col-md-3 border-end">
                <h5 class="tc-accent mt-3">Tags</h5>
                <div class="p-2">
                    @if ($image->labels)
                        @foreach ($image->labels as $label)
                            <p class="d-inline">{{$label}},</p>
                        @endforeach
                    @endif    
                </div>
            </div>
            @endif
        </div>
        <div class="row my-3">
            <div class="col-12 col-md-6">
                <h3>Descrizione</h3>
                <p>{{$announcement_to_check->body}}</p>
            </div>
        </div>
        <div class="row">
            {{-- collegato alla rotta accetta --}}
            <div class="col-12 col-md-2 mb-3">
                <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            {{-- collegato alla rotta rifiuta --}}
            <div class="col-12 col-md-2">
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