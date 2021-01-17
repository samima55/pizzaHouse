@extends('layouts.app')
@section('content')
   <div class="ml-4 mt-2 bg-light row">
       <div class="col-md-8 offset-md-2">
       <h4 class="border-bottom mb-4">Details of the Order {{$pizza->name}}</h4>
        <p class="ml-4 list-group-item">Type- {{$pizza->type}}</p>
        <p class="ml-4 list-group-item"> Size- {{$pizza->size}}</p>
        <p class="ml-4 list-group-item"> Base- {{$pizza->base}}</p>
        <p class="ml-4"> toppings:</p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li class="ml-4">{{$topping}}</li>
            @endforeach
        </ul>
        <div class="d-flex flex-row">
        <form action="/pizzas/{{$pizza->id}}" method="POST">
            @csrf
           @method('delete')
            <button class="btn btn-primary ml-4">Oder Complete</button>
        </form>
         <a href="/pizzas" class="btn btn-info ml-4">Go To All Orders</a>
        </div>
    </div>
    
   </div>   
@endsection