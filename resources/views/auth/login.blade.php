<x-layout>  
    <div class="container-fluid sectionLogin">
        <div class="row">
            <div class="col-12">
                <div class="login-box">
                    <form action="{{ route('login')}}" method="post">
                        @csrf
                        <h2 class="text-center text-black">Login</h2>
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                            <input id="exampleInputEmail1" type="email" name="email" required>
                            <label for="exampleInputEmail">Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                            <input id="exampleInputPassword1" type="Password" name="password" required>
                            <label for="exampleInputPassword1">Password</label>
                        </div>
                        {{-- <div class="remember-forgot">
                            <label><input type="checkbox">{{__('ui.loginRicorda')}}</label>
                        </div> --}}
                        <button class="buttonLogin" type="submit">Login</button>
                        <div class="login-link">
                            <p class="text-black">{{__('ui.loginNonsei')}} <a class="text-black" href="{{route('register')}}">{{__('ui.loginRegister')}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>