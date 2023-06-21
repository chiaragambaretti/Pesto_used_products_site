<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
    <div class="container-fluid">
        {{-- INSERIRE LOGO --}}
        <a class="navbar-brand" href="{{ route('home')}}">Presto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('announcement.index')}}">Tutti gli annunci</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">Login</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('announcement.create')}}">Inserisci annuncio</a>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}">
                        Zona revisore
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{-- contatore articoli da accettare --}}
                            {{App\Models\Announcement::toBeRevisionedCount()}}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </li>
                @endif
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Logout</button>
                </form>
                @endguest       
            </ul>
            <form action="{{route('announcements.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>