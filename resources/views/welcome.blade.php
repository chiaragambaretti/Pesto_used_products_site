<x-layout>
<x-header></x-header>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session()->has('access.denied'))
                <div class="alert alert-danger">
                    {{ session('access.denied') }}
                </div>
                @endif
            </div>
        </div>
    </div>

    {{-- scelta categorie --}}
    <x-slidercat></x-slidercat>

    {{-- mostra annunci --}}
    <div class="container mb-5">
        <h2 class="display-8 text-center fw-bold media-visit">{{__('ui.welcome')}}</h2>
    </div>
    <div class="d-flex justify-content-center">
        <i class="fa-solid fa-circle-arrow-down fa-bounce fa-2xl mt-5" style="color: #db9320;"></i>
    </div>
    <div class="container">
        <div class="row my-5">
            @foreach ($announcements as $announcement)
           <x-card :announcement="$announcement"></x-card>
            @endforeach
        </div>
    </div>

    {{-- banner promozionale --}}
    <div id="discount" class="container-fluid margin-top mb-5">
        <div class="row justify-content-center">
          <div class=" col-12 col-md-10">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-12 col-md-5 rounded-start-1" style="background-color: #db9320">
                  <img class="img-banner1" src="./img/img-bags.jpg" alt="...">
                  <img class="img-banner2" src="./img/img-woman1.jpg" alt="">
                </div>
                
                <div class="col-12 col-md-7 d-flex align-items-center rounded-end-1" style="background-color: #db9320">
                  <div class="card-body text-white ms-5">
                    <p>Cos'è Presto?</p>
                    <p>Presto è la piattaforma di compravendita di prodotti di seconda mano. "Se non lo usi, vendilo". Comprare articoli di seconda mano è il modo migliore per ottenere quello di cui hai bisogno a un prezzo migliore. Ma è anche molto di più! Ogni volta che compri qualcosa su Presto, alimenti un consumo più responsabile, perché allunghi la vita dei prodotti ed eviti la loro sovrapproduzione. Vendere l'usato è dire al mondo che possiamo vivere di più con meno. Più spazio in casa, più soldi extra, più esperienze nuove, più ricordi indimenticabili, più quello che vuoi, e meno cose inutilizzate nell'armadio. Finalmente, la società è cosciente che il mondo dell'usato è una nuova filosofia di consumo piena di benefici. Questa è la ragione per cui ogni volta sempre più persone utilizzano Presto.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</x-layout>