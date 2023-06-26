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
        <h2 class="display-6 fw-bold media-visit">Visita gli ultimi annunci</h2>
        <div class="row justify-content-center">
            @foreach ($categories as $category)
            <div class="col-12 col-md-1">
                <a class="text-decoration-none" href="{{route('categoryShow', ['category'=>$category])}}"><x-cardCategories
                :category="$category"></x-cardCategories></a>
            </div>
            @endforeach
        </div>
    </div>
 
    <div class="container">
        <div class="row my-5">
            
            @foreach ($announcements as $announcement)

           <x-card :announcement="$announcement"></x-card>

            @endforeach
        </div>
    </div>
</x-layout>