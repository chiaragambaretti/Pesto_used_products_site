<div class="col-12 col-md-4 col-lg-3 mt-5 d-flex">
    <div class="center">
        <div class="property-card">
            <a href="{{route('announcement.show', compact('announcement'))}}">
                <div class="property-image">
                    {{-- <div class="property-image-title">
                        <button class="card-text btn btn-danger btnCustom w-75" href="{{route('categoryShow', ['category'=>$announcement->category])}}">{{$announcement->category->name}}</button>         
                    </div> --}}
                </div>
                <div class="property-description">
                    <h5 class="text-truncate">{{$announcement->title}}</h5>
                    {{-- <a href="{{route('categoryShow', ['category'=>$announcement->category])}}" >
                    </a> --}}
                    <p class="card-text">Prezzo: €{{$announcement->price}}</p>
                    <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
            </a>
            </div>
        </div>
    </div>