<nav class="navbar navbar-dark navbar-expand-lg bg-transparent fixed-top navbar-blur">
    <div class="container-fluid">
        {{-- INSERIRE LOGO --}}
        <a class="navbar-brand text-black" href="{{ route('home')}}">Presto</a>
        <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black" aria-current="page" href="{{route('announcement.index')}}"><i class="fa-regular fa-rectangle-list"></i>{{__('ui.navAnnunci')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-list"></i>{{__('ui.navCategorie')}}</a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{ route('login')}}"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-black" href="{{route('announcement.create')}}"><i class="fa-solid fa-plus"></i>{{__('ui.InserireAnnuncio')}}</a>
                    </li>
                    @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="nav-link text-black btn btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}">
                            <i class="fa-solid fa-user-secret"></i> {{__('ui.revisiona')}}
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">
                                {{-- contatore articoli da accettare --}}
                                {{App\Models\Announcement::toBeRevisionedCount()}}
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                    </li>
                    @endif
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn"><i class="fa-solid fa-right-to-bracket"></i> Logout</button>
                    </form>
                    @endguest
                </ul>
                <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.lingua')}}</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <x-_locale lang='it'/>
                                
                                <a href="">Italiano</a>
                            </li>
                            <li class="nav-item">
                                <x-_locale lang='en'/>
                                <a href="">Inglese</a>
                            </li>
                            <li class="nav-item">
                                <x-_locale lang='es'/>
                                <a href="">Spagnolo</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
                
                <form action="{{route('announcements.search')}}" method="GET" class="d-flex" role="search">
                    <input name="searched" class="form-control me-2" type="search" placeholder="{{__('ui.navPlaceholder')}}" aria-label="Search">
                    <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>