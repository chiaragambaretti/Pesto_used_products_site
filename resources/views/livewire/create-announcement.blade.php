<div>
    {{-- messaggio corretto inserimento --}}
    @if (session()->has('inserimentoCorretto'))
      <div class="alert alert-success">
          {{ session('inserimentoCorretto') }}
      </div>
    @endif
  <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
      <label for="InputTitle" class="form-label">Inserisci titolo</label>
      <input type="text" name="title" wire:model="title" class="form-control @error('title') is-invalid @enderror" id="InputTitle" aria-describedby="emailHelp">
      {{-- errore nell'inserimento dei campi --}}
      @error('title')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div>
    <label for="category" class="form-label">Inserisci titolo</label>
    <select class="form-select @error('category') is-invalid @enderror" id="category" aria-label="Default select example" wire:model.defer='category'>
      <option selected>Scegli Categoria</option>
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option> 
      @endforeach 
    </select>
      @error('category')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-3">
      <label  for="floating">Inserisci descrizione</label>
      <textarea class="form-control @error('body') is-invalid @enderror" name="body" wire:model="body" id="floating" style="height: 100px"></textarea>
      {{-- errore nell'inserimento dei campi --}}
      @error('body')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="InputPrice" class="form-label">Inserisci prezzo</label>
      <input type="number" step="any" name="price" wire:model="price" class="form-control @error('price') is-invalid @enderror" id="InputPrice">
      {{-- errore nell'inserimento dei campi --}}
      @error('price')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Inserisci annuncio</button>
  </form>    
</div>
