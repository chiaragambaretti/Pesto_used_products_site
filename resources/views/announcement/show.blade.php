<x-layout>
  <div class="container margin15vh">
    <div class="row ">
      <div class="col-12 col-md-6">
        <div id="carouselExampleCaptions" class="carousel slide">
          @if (count($announcement->images))
          <div class="carousel-inner">
            @foreach ($announcement->images as $image)
            <div class="carousel-item @if($loop->first)active @endif">
              <img src="{{$image->getUrl(800 , 700)}}" class="img-fluid p-3 rounded border-show" alt="{{$announcement->title}}">
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
              <img src="https://picsum.photos/1200/600" class="img-fluid rounded"> 
            </div>
            
            <div class="carousel-item">
              <img src="https://picsum.photos/1200/601" class="img-fluid rounded">
            </div>
            
            <div class="carousel-item">
              <img src="https://picsum.photos/1200/603" class="img-fluid rounded">
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

      <div class="col-12 col-md-6 mt-3">
  <a class="btn mb-3 btnShow btn-sm btn-color-show" href="{{route('categoryShow', ['category'=>$announcement->category])}}">{{$announcement->category->name}}</a>
        <h2>{{$announcement->title}}</h2>
        <p><span class="h4">Inserito da: </span> {{$announcement->user->name ?? ''}}</p>     
        <p><span class="h4">Pubblicato il: </span>{{$announcement->created_at->format('d/m/Y')}}</p>

        <p><span class="h4">Prezzo: </span><span class="h3">€{{$announcement->price}}</span></p>
      </div>
    </div>
  
      <div class="row my-3">
        <div class="col-12 col-md-6">
          <h3>{{__('ui.revisionaDesc')}}</h3>
          <p>{{$announcement->body}}</p>
        </div>
      </div>

    
  </div>
</x-layout>