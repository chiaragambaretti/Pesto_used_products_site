<x-layout>
    <div class="container">
        <div class="row my-5">
            <h1 class="text-center mb-5">{{__('ui.allAnnouncements')}}</h1>
            @forelse ($announcements as $announcement)
            <x-cardAnnunci :announcement="$announcement"></x-cardAnnunci>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">{{__('ui.noncisonoAnnunci')}}</p>
                    </div>
                </div>
            @endforelse
            <div class="row my-5">
                <div class="col-12 d-flex justify-content-center">
                    {{$announcements->links()}}
                </div>             
            </div>
        </div>
    </div> 
</x-layout>