<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center my-4">{{$category->name}}</h1>
            @forelse ($category->announcements as $announcement)

            <x-cardAnnunci :announcement="$announcement"></x-cardAnnunci>
            
            @empty
                <div class="col-12 text-center my-5">
                    <p class="h4">Non sono presenti annunci per questa categoria!</p>
                    <p class="h2 my-4"><a class="btn btn-success shadow" href="{{route('announcement.create')}}">Pubblicane uno</a></p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>