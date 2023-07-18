<x-layout>
    <div class="container-fluid mt-5 mb-4">
        <div class="row">
            <div class="col-12 mt-5">
                <table class="table">
                    <thead>
                      <tr class="">
                        {{-- <th scope="col">id</th> --}}
                        <th scope="col">Titolo</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Prezzo</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->announcements as $announcement)
                      <tr class="">
                        {{-- <th scope="row">{{$announcement->id}}</th> --}}
                        <td>{{$announcement->title}}</td>
                        <td>{{$announcement->body}}</td>
                        <td>{{$announcement->price}}</td>
                        <td>
                            <a href="{{route('announcement.edit', $announcement)}}" class="btn btn-outline-success btn-sm w-100">Modifica</a>
                            {{-- cancella annuncio --}}
                            <form method="post" action="{{route('announcement.delete', ['id' => $announcement->id])}}">
                                @method('delete')
                                <button class="btn btn-sm btn-outline-danger mt-2 w-100">Elimina</button>
                                @csrf
                            </form>
                            
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
    </x-layout>
    