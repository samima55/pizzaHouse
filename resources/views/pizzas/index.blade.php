@extends('layouts.app')
@section('content')

       
       <div class="row justify-content-center">
      <p class="text-uppercase text-lg ">All pizza order list</p>
       </div>
       <div class="row justify-content-center">
         <div class="col-md-6">
     @if(count($pizzas)>0)
       <div class="row justify-content-center">
           <div class="col-md-6">
             <div class="d-flex flex-row">
                 <div><h4 class="">Pizza</h4></div>
                  <div> <h4 style="margin-left:200px;">Name</h4></div>
             </div>
           </div>
       </div>
       <hr>
       @foreach ($pizzas as $pizza)
       <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="d-flex flex-row">
           <div>
            <img src="/img/smallpizza.png"  style="width:10%" alt="">
           </div>
          
          <div>
            <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a>
          </div>
          </div>
        </div>
       </div>
       <hr>
        @endforeach
    @else 
    <p class="alert alert-danger">No orders </p>
    @endif
    </div>
       </div>
@endsection