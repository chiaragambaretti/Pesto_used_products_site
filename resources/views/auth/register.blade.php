<x-layout>
    {{-- <div class="container my-5">
        <h1>Registrati</h1>
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
    </div>  --}}

<div class="container-fluid sectionRegister">
    <div class="row">
        <div class="col-12">
            <div class="register-box">
                <form action="{{ route('register')}}" method="post">
                    @csrf
                    <h2 class="text-center text-black mb-5">{{__('ui.navRegister')}}</h2>
                    <div class="register-input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input id="InputName" type="text" name="name" required>
                        <label for="InputName">Nome</label>
                    </div>
                    <div class="register-input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input id="InputEmail1" type="email" name="email" required>
                        <label for="InputEmail1">Email</label>
                    </div>
                    <div class="register-input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input id="InputPassword1" type="password" name="password" required>
                        <label for="InputPassword1">Password</label>
                    </div>
                    <div class="register-input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input id="InputPassword2" type="password" name="password_confirmation" required>
                        <label for="InputPassword2">Password Confirmation</label>
                    </div>
                    <div class="register-remember-password">
                        <label><input type="checkbox">Ricordami</label>
                    </div>
                    <button class="buttonRegister" type="submit">{{__('ui.navRegister')}}</button>
                    <div class="register-link">
                        <p class="text-black">Hai già un Account? <a class="text-black" href="{{route('login')}}">Accedi</a></p>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>