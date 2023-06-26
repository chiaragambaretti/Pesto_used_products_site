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
                            <label for="exampleInputEmail1">Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="fa-solid fa-lock"></i></span>
                            <input id="exampleInputPassword1" type="Password" name="password" required>
                            <label for="exampleInputPassword1">Password</label>
                        </div>
                        <div class="remember-forgot">
                            <label><input type="checkbox">Ricordami</label>
                        </div>
                        <button class="buttonLogin" type="submit">Login</button>
                        <div class="register-link">
                            <p class="text-black">Non hai un account? <a class="text-black" href="{{route('register')}}">{{__('ui.navRegister')}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>