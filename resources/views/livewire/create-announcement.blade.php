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
      <label for="InputTitle" class="form-label">{{__('ui.titolo')}}</label>
      <input type="text" name="title" wire:model="title" class="form-control @error('title') is-invalid @enderror" id="InputTitle" aria-describedby="emailHelp">
      {{-- errore nell'inserimento dei campi --}}
      @error('title')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div>
    <select class="mb-3 form-select @error('category') is-invalid @enderror" id="category" aria-label="Default select example" wire:model.defer='category'>
      <option selected>{{__('ui.selectCategoria')}}</option>
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option> 
      @endforeach 
    </select>
      @error('category')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-3">
      <label class="mb-2" for="floating">{{__('ui.descrizione')}}</label>
      <textarea class="form-control @error('body') is-invalid @enderror" name="body" wire:model="body" id="floating" style="height: 100px"></textarea>
      {{-- errore nell'inserimento dei campi --}}
      @error('body')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="InputPrice" class="form-label">{{__('ui.inserisciPrezzo')}}</label>
      <input type="number" step="any" name="price" wire:model="price" class="form-control @error('price') is-invalid @enderror" id="InputPrice">
      {{-- errore nell'inserimento dei campi --}}
      @error('price')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-3">
      <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img">
      {{-- errore nell'inserimento dei campi --}}
      @error('temporary_images.*')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    @if (!empty($images))
    <div class="row">
      <div class="col-12">
        <p>{{__('ui.preview')}}</p>
        <div class="row border border-4 border-file-up rounded shadow py-4">
          @foreach ($images as $key => $image )
          <div class="col my-3">
            <div class="mx-auto-shadow-rounded img-previewSize"  style="background-image: url({{$image->temporaryUrl()}}); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
            <button type="button" class="btn btn-danger btn-sm shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.cancella')}}</button>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif

    <button type="submit" class="btn btnAcustom">{{__('ui.btnInserisci')}}</button>
  </form>    
</div>
