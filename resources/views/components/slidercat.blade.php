<div class="container mt-5 mb-5 container-nav">
    <div class="row justify-content-around ulScrollX">
            {{-- cat 1 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[0]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-car fa-fade fa-xl mt-4" style="color: #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[0]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 2 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[1]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-desktop fa-fade fa-xl mt-4" style="color: #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[1]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 3 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[2]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-fire-burner fa-fade fa-xl mt-4" style="color:  #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat text-truncate">{{$categories[2]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat-4 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[3]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-book fa-xl fa-fade mt-4" style="color:#f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[3]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 5 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[4]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-volleyball fa-xl fa-fade mt-4" style="color: #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[4]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 6 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[5]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-person-swimming fa-xl fa-fade mt-4" style="color: #f0f0f0;"></i></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[5]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 7 --}}
        <div class="col-12 col-md-1">
            <div class="categories liScroll"> 
                <a href="{{route('categoryShow', ['category' => $categories[6]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"><i class="fa-solid fa-house fa-lg fa-fade mt-4" style="color: #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[6]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 8 --}}
        <div class="col-12 col-md-1 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[7]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"> <i class="fa-solid fa-mobile fa-xl fa-fade mt-4" style="color: #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[7]->name}}</p>
                </a>
            </div>
        </div>
        {{-- cat 9 --}}
        <div class="col-12 col-md-1 mb-5 liScroll">
            <div class="categories"> 
                <a href="{{route('categoryShow', ['category' => $categories[8]])}}" class="d-block text-decoration-none" >
                    <div class="text-center"> <i class="fa-solid fa-couch fa-xl fa-fade mt-4" style="color: #f0f0f0;"></i></div>
                    <p class="text-center mt-1 a-cat">{{$categories[8]->name}}</p>
                </a>
            </div>
        </div>
    </div>
</div>
</div>