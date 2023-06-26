{{-- <section>
    <div class="container mb-3 py-1">
      <div class="row justify-content-center mb-3">
        <div class="col-md-8">
          <div class="card shadow-0 border roundedCustom">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                  <div class="bg-image hover-zoom ripple rounded ripple-surface">
                    <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/1200'}}"
                      class="w-100 roundedCustom" />
                    <a href="#!">
                      <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <h5>{{$announcement->title}}</h5>
                  
                  <div class="mt-1 mb-0 text-muted small">
                    
                  </div>
                  <div class="mb-2 text-muted small">
                    <span>{{$announcement->created_at->format('d/m/Y')}}</span>
                    <span class="text-primary"> • </span>
                  </div>
                  <p class="text-truncate mb-4 mb-md-0">
                    {{$announcement->body}}
                  </p>
                </div>
                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                  <div class="d-flex flex-row align-items-center mb-1">
                    <h4 class="mb-1 me-1">€{{$announcement->price}}</h4>
                    
                  </div>
                  
                  <div class="d-flex flex-column mt-4">
                   
                    <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary btn-sm" type="button">Dettagli</a> --}}
                    {{-- <button class="btn btn-outline-primary btn-sm mt-2" type="button">
                      Add to wishlist
                    </button> --}}
                  {{-- </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section> --}}
<section>
  <div class="container mb-3 py-1">
    <div class="row justify-content-center mb-3">
        <div class="card roundedCustom">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-3 rounded">
                  <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/1200'}}"
                    class="w-100 roundedCustom" />
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6">
                <h5>{{$announcement->title}}</h5>
                <div class="mt-1 mb-0 text-muted small">
                  
                </div>
                <div class="mb-2 text-muted small">
                  <span>{{$announcement->created_at->format('d/m/Y')}}</span>
                  {{-- <span class="text-primary"> • </span> --}}
                </div>
                <p class="text-truncate mb-4 mb-md-0">
                  {{$announcement->user->name ?? ''}}
                </p>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                <div class="d-flex flex-row align-items-center mb-1">
                  <h4 class="mb-1 me-1">€{{$announcement->price}}</h4>
                </div>
                
                <div class="d-flex flex-column mt-4">
                
                  <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-sm btn-index" type="button">Dettagli</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>