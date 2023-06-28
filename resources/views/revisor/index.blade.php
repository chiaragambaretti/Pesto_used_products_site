<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 mt-5 text-center fs-2">
                {{-- verifica la presenza di annunci da revisionare --}}
                {{$announcement_to_check ? __('ui.revisionaCisono') : __('ui.revisionaNoncisono')}}
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
    {{-- AGGIUSTARE LA VISTA CON I DFLEX E I JUSTIFY --}}
    <div class="container my-5">
        <div class="row ">
            <div class="col-12 col-md-3">
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
                    <div>
                        <h2>Immagine di default:</h2>
                        <img src="https://liftlearning.com/wp-content/uploads/2020/09/default-image.png" alt="immagine di default">
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-3">
                <a href="{{route('categoryShow', ['category'=>$announcement_to_check->category])}}">{{$announcement_to_check->category->name}}</a>
                <p>{{$announcement_to_check->user->name ?? ''}}</p>     
                <p>{{$announcement_to_check->created_at}}</p>
                <h1>{{$announcement_to_check->title}}</h1>
                <p>Prezzo: € {{$announcement_to_check->price}}</p>
            </div>
            @if (count($announcement_to_check->images))
            <div class="col-md-3">
                <div class="card-body">
                    <h5 class="tc-accent">{{__('ui.revisionaImg')}}</h5>
                    <p>{{__('ui.revisionaAdulti')}}: <span class="{{$image->adult}}"></span></p>
                    <p>{{__('ui.revisionaSatira')}}: <span class="{{$image->spoof}}"></span></p>
                    <p>{{__('ui.revisionaMedicina')}}: <span class="{{$image->medical}}"></span></p>
                    <p>{{__('ui.revisionaViolenza')}}: <span class="{{$image->violence}}"></span></p>
                    <p>{{__('ui.revisionaAmmicca')}}: <span class="{{$image->racy}}"></span></p>
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
                <h3>{{__('ui.revisionaDesc')}}</h3>
                <p>{{$announcement_to_check->body}}</p>
            </div>
        </div>
        <div class="row">
            {{-- collegato alla rotta accetta --}}
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.accept_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">{{__('ui.revisionaAccetta')}}</</button>
                </form>
            </div>
            {{-- collegato alla rotta rifiuta --}}
            <div class="col-12 col-md-6">
                <form action="{{route('revisor.reject_announcement', ['announcement'=>$announcement_to_check])}}" method="post">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">{{__('ui.revisionaRifiuta')}}</button>
                </form>
            </div>
        </div>
    </div>
    @endif
</x-layout>