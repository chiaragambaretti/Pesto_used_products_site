
<section>
    <div class="container mb-2 py-1 width-annunci mt-5">
      <div class="row justify-content-center mb-3">
          <div class="card roundedCustom">
            <div class="card-body blurAnnunci">
              <div class="row">
                <div class="col-12 col-md-3 rounded">
                    <a href="{{route('announcement.show', compact('announcement'))}}"><img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800 , 700) : 'https://www.nbmchealth.com/wp-content/uploads/2018/04/default-placeholder.png'}}"
                      class="w-100 roundedCustom" /></a>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 mt-2">
                  <h4 class="font-weight-annunci">{{$announcement->title}}</h4>
                  <div class="mt-1 mb-0 text-muted small">
                    
                  </div>
                  <div class="mb-2 text-muted small">
                    <span>{{$announcement->created_at->format('d/m/Y')}}</span>
                  </div>
                  <p class="text-truncate mb-4 mb-md-0">
                    {{$announcement->user->name ?? ''}}
                  </p>
                  {{-- <form method="post" action="{{route('announcement.delete', ['id' => $announcement->id])}}">
                    @method('delete')
                    <button class="btn btn-sm btn-danger mt-2 w-50">Elimina</button>
                    @csrf
                  </form> --}}

                  {{-- <button class="btn btn-sm mt-3 bottone-gestione"><a class="text-white gestione" href="{{route('user.dashboard')}}">Gestisci annuncio</a></button> --}}

                </div>
  
                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                  <div class="d-flex flex-row align-items-center mb-1">
                    <h4 class="mb-1 ms-5  ">€{{$announcement->price}}</h4>
                  </div>
                  
                  <div class="d-flex flex-column mt-4">
                  
                    <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btnDetailIndex">Dettagli<span class="text-center ps-2"><i class="fa-solid fa-book-open fa-lg" style="color: #db9320"></i></span> </a>
                    <a class="btn mt-4 btnTuttiannunciCustom " href="{{route('categoryShow', ['category'=>$announcement->category])}}">{{$announcement->category->name}} <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>
