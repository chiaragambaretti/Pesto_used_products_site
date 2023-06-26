<div class="col-12 col-md-4 mt-5 d-flex">
    <div class="home-card-center">
        <div class="property-card">
            <a href="{{route('announcement.show', compact('announcement'))}}">
                <div class="property-image" style="background-image:url('{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/1200'}}');">
                </div>
                <div class="property-description">
                    <h5 class="text-truncate home-card-h5">{{$announcement->title}}</h5>
                    <p class="card-text home-card-p">Prezzo: €{{$announcement->price}}</p>
                    <p class="card-text home-card-p">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
            </a>
        </div>
    </div>
</div>