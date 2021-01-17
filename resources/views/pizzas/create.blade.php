@extends('layouts.app')
@section('content')
<div class="ml-4 mt-2 bg-light row">
    <div class="col-md-8 offset-md-2">
        <form action="/pizzas" method="POST">
            @csrf
            <label class="form-label" for="name">Your name:</label>
            <input class="form-control" type="text" name="name" id="name" required>
            <br>
            <label class="form-label" for="size"> size of pizza :</label>
            <select name="size" id="size" class="form-control">
                <option value="small">small</option>
                <option value="middle">midlle</option>
                <option value="large">large</option>
                <option value="extra large">extra large</option>
            </select>
            <br>
            <label class="form-label" for="name">Choose type of pizza</label>
            <select name="type" id="type" class="form-control">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>

                 <br>
            <label class="form-label" for="base">Choose crust:</label>
            <select name="base" id="base" class="form-control">
              <option value="thick">Thick</option>
              <option value="thin & crispy">Thin & Crispy</option>
              <option value="cheese crust">Cheese Crust</option>
              <option value="garlic crust">Garlic Crust</option>
            </select>
    
           <fieldset>
               <br>
                <label class="form-label">Extra toppings:</label>
                <br>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
                <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
                <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            </fieldset>
            <input type="submit"  class="btn btn-primary" value="Order Pizza">
        </form>
    </div>
</div>
@endsection