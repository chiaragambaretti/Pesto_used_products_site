
<section>
  <div class="container mb-3 py-1 width-annunci">
    <div class="row justify-content-center mb-3">
        <div class="card roundedCustom">
          <div class="card-body blurAnnunci">
            <div class="row">
              <div class="col-12 col-md-3 rounded">
                  <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800 , 700) : 'https://picsum.photos/1200'}}"
                    class="w-100 roundedCustom" />
              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 mt-2">
                <h4 class="font-weight-annunci">{{$announcement->title}}</h4>
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
    {{-- #ff0003 --}}
</section>