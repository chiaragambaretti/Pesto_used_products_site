<x-layout>
    <div class="container my-5">
        <h1>REGISTRATI</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <form action="{{ route('register')}}" method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci un nome</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">    
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci una email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputEmail2" class="form-label">Conferma la tua email</label>
                        <input type="email" name="email_verified_at" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">    
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Conferma la password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordati</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div> 
</x-layout>