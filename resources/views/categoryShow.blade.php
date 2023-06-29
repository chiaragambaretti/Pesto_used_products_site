<x-layout>
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center my-4">{{$category->name}}</h1>
            
            @forelse ($category->announcements->where('is_accepted' , true) as $announcement)

            <x-cardAnnunci :announcement="$announcement"></x-cardAnnunci>
            
            @empty
                <div class="col-12 text-center my-5">
                    <p class="h4">{{__('ui.category')}}</p>
                    <p class="h2 my-4"><a class="btn btn-success shadow" href="{{route('announcement.create')}}">Pubblicane uno</a></p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>