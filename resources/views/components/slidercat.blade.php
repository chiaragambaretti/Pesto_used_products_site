
<nav class="container-nav mt-5 container-fluid">
    <div class="ulScrollX mb-5">
        <div class="liScroll">
            {{-- motori --}}
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[0]])}}"><i class="fa-solid fa-car fa-xl mt-4 text-center" style="color: #db9320;"></i></a>    
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[0]])}}">{{$categories[0]->name}}</a>
        </div>
        {{-- informatica --}}
        <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[1]])}}"><i class="fa-solid fa-desktop  fa-xl mt-4 text-center" style="color: #db9320;"></i></a>  
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[1]])}}">{{$categories[1]->name}}</a>
        </div>
        {{-- elettrodomestici --}}
        <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[2]])}}"><i class="fa-solid fa-fire-burner  fa-xl mt-4 text-center" style="color: #db9320;"></i></a>   
            <a class="a-cat text-center text-truncate" href="{{route('categoryShow', ['category' => $categories[2]])}}">{{$categories[2]->name}}</a>
        </div>
        {{-- libri --}}
        <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[3]])}}"><i class="fa-solid fa-book fa-xl mt-4 text-center" style="color:#db9320;"></i></a>   
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[3]])}}">{{$categories[3]->name}}</a>
        </div>  
         {{-- giochi --}}
         <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[4]])}}"><i class="fa-solid fa-volleyball fa-xl mt-4 text-center" style="color: #db9320;"></i></a>   
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[4]])}}">{{$categories[4]->name}}</a>
        </div>
        {{-- sport --}}
        <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[5]])}}"><i class="fa-solid fa-person-swimming fa-xl mt-4 text-center" style="color: #db9320;"></i></a>
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[5]])}}">{{$categories[5]->name}}</a>
        </div>
        {{-- immobili --}}
        <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[6]])}}"><i class="fa-solid fa-house fa-lg mt-4 text-center" style="color: #db9320;"></i></a>   
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[6]])}}">{{$categories[6]->name}}</a>
        </div>
        {{-- telefonia --}}
        <div class="liScroll">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[7]])}}"><i class="fa-solid fa-phone fa-xl mt-4 text-center" style="color: #db9320;"></i></a>  
            <a class="a-cat text-center" href="{{route('categoryShow', ['category' => $categories[7]])}}">{{$categories[7]->name}}</a>
        </div> 
        {{-- arredamento --}}
        <div class="liScroll mb-5">
            <a class="cat-icon" href="{{route('categoryShow', ['category' => $categories[8]])}}"><i class="fa-solid fa-couch fa-xl mt-4 text-center" style="color: #db9320;"></i></a>    
            <a class="a-cat text-center text-truncate" href="{{route('categoryShow', ['category' => $categories[8]])}}">{{$categories[8]->name}}</a>
        </div> 
    </div>
</nav>