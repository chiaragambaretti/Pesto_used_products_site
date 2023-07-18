{{-- <form action="{{route('announcement.save', $announcement->id)}}" method="post" enctype="multipart/form-data">
@csrf
    <label for="title" class="form-label">Inserisci il titolo</label>
    <input type="text" name="title" value="{{$announcement->title}}" required>
    <label for="body">Inserisci la descrizione</label>
    <input type="text" name="body" value="{{$announcement->body}}" required>
    <label for="price">Inserisci il prezzo</label>
    <input type="number" name="pirce" value="{{$announcement->price}}" required> --}}

    {{-- carico immagini --}}
    {{-- @foreach($images as $image)
        <img src="{{asset($image->path)}}" alt="immagine annuncio">
    @endforeach --}}
    {{-- carico nuove immagini --}}
    {{-- <input type="file" name="images[]" multiple>

    <button type="submit">Salva le modifiche</button>
</form> --}}

{{-- form da sistemare --}}

<x-layout>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mt-5 mb-5 w-50">

            <form class="mb-5" action="{{route('announcement.save', $announcement->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label class="form-label">Inserisci Titolo</label>
                    <input name="title" type="text" class="form-control" value="{{$announcement->title}}" required>
                  </div> 
                  
                  <div class="mb-3">
                    <label class="form-label">Inserisci descrizione</label>
                    <textarea name="body" class="form-control" rows="3" required>{{$announcement->body}} </textarea>
                  </div>
                  {{-- carico le immagini --}}
                  <div class="mb-3">
                      <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(800 , 700) : 'https://www.nbmchealth.com/wp-content/uploads/2018/04/default-placeholder.png'}}" class="my-3 img-previewSizes img-fluid" alt="Immagine annuncio">
                    </div>
                <div>
                      {{-- carico nuove immagini --}}

                <label class="form-label">Inserisci immagine</label>
                   <input type="file" name="images" multiple>
                  </div>
              
                  {{-- <div class="mb-3">
                    <label class="form-label">Inserisci categoria</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                      @foreach($categories as $category)
                       <option value="{{$category->id}} {{$post->category_id == $category->id ? 'selected' : ''}}">{{$category->name}}</option>   
                      @endforeach
                    </select>
                  </div> --}}
              
                  <div class="mb-3">
                    <label class="form-label">Inserisci prezzo</label>
                    <input name="price" type="number" class="form-control" value="{{$announcement->price}}" required>
                  </div>
              
                  <button type="submit" class="btn btn-profilo mt-5 ">Salva le modifiche</button>
              
              </form>
        </div>
    </div>
</div>
</x-layout>