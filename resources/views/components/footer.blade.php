<footer class="container-fluid footer-wrapper bg-dark">
    <div class="row justify-content-around">    
        <div col-12 col-md-6 col-sm-6>
            <ul class="social-icons">   
                <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram fa-xl" style="color: #ffffff"></i></a></li>
                <li><a href="https://it-it.facebook.com/"><i class="fa-brands fa-facebook fa-xl" style="color: #ffffff"></i></a></li>
                <li><a href="https://twitter.com/?lang=it"><i class="fa-brands fa-twitter fa-xl" style="color: #ffffff"></i></a></li>
                <li><a href="https://www.tiktok.com/login?redirect_url=https%3A%2F%2Fwww.tiktok.com%2Fit-IT&lang=en&enter_method=mandatory"><i class="fa-brands fa-tiktok fa-xl" style="color: #ffffff;"></i></a></li>
            </ul>
            <a href="{{route('home')}}" class="text-decoration-none fw-bold" style="color: #ffffff"><h5 class="text-center">Presto.it</a></h5>
            <ul class="menu fw-bold">  
                {{-- <li><a class="text-decoration-none" href="">Presto team</a></li> --}}
                <li><a class="text-decoration-none" href="{{route('workwithus')}}">{{__('ui.footerLavora')}}</a></li>
            </ul>
        </div>
    </div>
</footer>