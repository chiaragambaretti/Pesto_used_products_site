<nav class="navbar navbar-expand-lg bg-primary fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        {{-- INSERIRE LOGO --}}
        <a class="navbar-brand" href="{{ route('home')}}">Presto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('announcement.index')}}"><i class="fa-regular fa-rectangle-list"></i> Annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-list"></i> Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register')}}"><i class="fa-solid fa-user-plus"></i> Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('announcement.create')}}"><i class="fa-solid fa-plus"></i> Inserisci Annuncio</a>
                </li>
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}">
                        <i class="fa-solid fa-user-secret"></i> Revisiona
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
            <form action="{{route('announcements.search')}}" method="GET" class="d-flex" role="search">
                <input name="searched" class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>