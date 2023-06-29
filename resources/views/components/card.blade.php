<div class="col-12 col-md-4 mt-5 d-flex">
    <div class="home-card-center">
        <div class="property-card">
            <a href="{{route('announcement.show', compact('announcement'))}}">
                <div class="property-image" style="background-image:url('{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800 , 700) : 'https://www.nbmchealth.com/wp-content/uploads/2018/04/default-placeholder.png'}}');">
                    {{-- <div class="property-image-title">
                        <button class="card-text btn btn-danger btnCustom w-75" href="{{route('categoryShow', ['category'=>$announcement->category])}}">{{$announcement->category->name}}</button>         
                    </div> --}}
                </div>
                <div class="property-description">
                    <h5 class="text-truncate home-card-h5">{{$announcement->title}}</h5>
                    <p class="home-card-p">Prezzo: €{{$announcement->price}}</p>
                    <p class="home-card-p">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
            </a>
        </div>
    </div>
</div>