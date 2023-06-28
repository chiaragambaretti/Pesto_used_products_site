let navbar= document.querySelector('#nav');

let header= document.querySelector('#header');

let presto= document.querySelector('#presto-scroll');

window.addEventListener('scroll', ()=>{
    if(window.scrollY > 2){
        presto.classList.add('title-up')
        presto.classList.remove('title-initial')
    }else{
        presto.classList.remove('title-up')
        presto.classList.add('title-initial')
    }
    
    if(window.scrollY > 100){
        header.classList.add('header-none')
        
    }else{
        header.classList.remove('header-none')
        
    }
    if(window.scrollY > 300){
        navbar.classList.add('navbar-scroll')
    }else{
        navbar.classList.remove('navbar-scroll')
    }
})



