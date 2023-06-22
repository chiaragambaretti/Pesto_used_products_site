<x-layout>
    <div class="container mb-5">
        <div class="row mt-5">
            <h1 class="text-center">{{__('ui.workLavoraCon')}}</h1>
            <hr>
            <div class="col-12 col-md-6 mt-5">
                <h2>{{__('ui.workSiamo')}}</h2>
                <h3 class="mt-5">{{__('ui.workDacci')}} <strong>{{__('ui.workDiventa')}}</strong></h3>
            </div> 
            <div class="col-12 col-md-6 mt-5">
                
                <p>{{__('ui.workCome')}}</p>
                
                <p>{{__('ui.workSarai')}}</p>
                
                <p>{{__('ui.workSe')}}</p> 
                
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{route('become.revisor')}}"><button class="btn btn-danger">{{__('ui.workDiventa')}}</button></a>
                </div>
            </div>
        </div>
    </div>
</x-layout> 