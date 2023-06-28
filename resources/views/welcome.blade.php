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
    <div class="container">
        <h2 class="display-6 text-center fw-bold media-visit">Visita gli ultimi annunci</h2>
    </div>
    <div class="d-flex justify-content-center">
        <i class="fa-solid fa-circle-arrow-down fa-bounce fa-2xl mt-5" style="color: #db9320;"></i>
    </div>
    {{-- <div class="row justify-content-center">
        @foreach ($categories as $category)
        <div class="col-12 col-md-1">
            <a class="text-decoration-none" href="{{route('categoryShow', ['category'=>$category])}}">
                {{-- :category="$category"></a> --}}
            {{-- </div>
            @endforeach
        </div> --}}
    </div>
 
    <div class="container">
        <div class="row my-5">
            
            @foreach ($announcements as $announcement)

           <x-card :announcement="$announcement"></x-card>

            @endforeach
        </div>
    </div>
</x-layout>