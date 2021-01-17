@extends('layouts.app')
@section('content')

     <div class="row">
         <div class="col-md-3 offset-md-4  justify-content-center">
        <img src="/img/pizza.png " style="width: 90%">
        <div class="mt-4 text-center">
            <p class="border-bottom text-uppercase text-lg ">Denmark's Best Pizza</p>
            <p class="alert alert-success">{{ session('msg') }}</p>
     
             <p> <a class="btn btn-primary" href="/pizzas/create"> Order a Pizza </a></p>
        </div>
        </div>
     </div>

       
    

@endsection