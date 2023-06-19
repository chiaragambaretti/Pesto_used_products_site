<div>
    {{-- messaggio corretto inserimento --}}
    @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session('message') }}
      </div>
    @endif

  <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
      <label for="InputTitle" class="form-label">Inserisci titolo</label>
      <input type="text" name="title" wire:model="title" class="form-control" id="InputTitle" aria-describedby="emailHelp">
      {{-- errore nell'inserimento dei campi --}}
      @error('title') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div>
    <label for="category" class="form-label">Inserisci titolo</label>
    <select class="form-select" id="category" aria-label="Default select example" wire:model.defer='category'>
      <option selected>Scegli Categoria</option>
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option> 
      @endforeach 
    </select>
    </div>

    <div class="mb-3">
      <label  for="floating">Inserisci descrizione</label>
      <textarea class="form-control" name="body" wire:model="body" id="floating" style="height: 100px"></textarea>
      {{-- errore nell'inserimento dei campi --}}
      @error('body') <span class="error">{{ $message }}</span> @enderror
    </div>
    
    <div class="mb-3">
      <label for="InputPrice" class="form-label">Inserisci prezzo</label>
      <input type="number" name="price" wire:model="price" class="form-control" id="InputPrice">
      {{-- errore nell'inserimento dei campi --}}
      @error('price') <span class="error">{{ $message }}</span> @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Inserisci annuncio</button>
  </form>    
</div>
