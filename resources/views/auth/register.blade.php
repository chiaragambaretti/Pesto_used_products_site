<x-layout>
<div class="container-fluid sectionRegister">
    <div class="row">
        <div class="col-12">
            <div class="register-box">
                <form action="{{ route('register')}}" method="post">
                    @csrf
                    <h2 class="text-center text-black mt-5">{{__('ui.navRegister')}}</h2>
                    <div class="register-input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input id="InputName" type="text" name="name" required>
                        <label for="InputName">{{__('ui.registerNome')}}</label>
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
                        <label for="InputPassword2">{{__('ui.registerConferma')}}</label>
                    </div>
                    {{-- <div class="register-remember-password">
                        <label><input type="checkbox">{{__('ui.loginRicorda')}}</label>
                    </div> --}}
                    <button class="buttonRegister" type="submit">{{__('ui.loginRegister')}}</button>
                    <div class="register-link">
                        <p class="text-black">{{__('ui.registerHai')}} <a class="text-black" href="{{route('login')}}">{{__('ui.registerAccedi')}}</a></p>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>