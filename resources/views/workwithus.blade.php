<x-layout>

    <div class="container d-flex justify-content-center mt-5 header-custom-work">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mt-5">Benvenuto nella sezione <strong>{{__('ui.workLavoraCon')}}</strong></h1>
            </div>
        </div>
    </div>

    <div class="div-custom mt-5"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="mt-5 text-center">{{__('ui.workSiamo')}}</h3>
                <h3 class="text-center">{{__('ui.workDacci')}}<strong>{{__('ui.workDiventa')}}</strong></h3>   
                <p class="p-work">{{__('ui.workCome')}}</p>
                
                <p class="p-work"><p>{{__('ui.workSarai')}}</p>
                
                <p class="p-work">{{__('ui.workSe')}}</p>
            </div>
        </div> 
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5 fw-bold">Inviaci la tua richiesta!</h3>
                <div class="d-flex justify-content-center">
                    <i class="fa-solid fa-circle-arrow-down fa-bounce fa-2xl mt-5" style="color: #ff0000;"></i>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="m-5 a-work" href="{{route('become.revisor')}}"><button class="btn btn-revisor">{{__('ui.workDiventa')}}</button></a>
                </div>
            </div>
        </div>
    </div>
</x-layout> 

