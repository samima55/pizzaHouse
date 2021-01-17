<?php

namespace App\Http\Controllers;
 use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

      function __construct()
      {
           $this->middleware('auth',['except'=>['create','store']]);
      }

      function index(){
         $pizzas= Pizza::all();
         return view('pizzas/index')->with('pizzas',$pizzas);
      }
         public function create(){
               return view('pizzas/create');
         }

      function show($id){
      $pizza=Pizza::findOrFail($id);
        return view('pizzas/show',['pizza'=>$pizza]
            );
      }

      function store(){
            $pizza= new Pizza();
            $pizza->name= request('name');
            $pizza->size=request('size');
            $pizza->base=request('base');
            $pizza->type=request('type');
            $pizza->toppings=request('toppings');
            $pizza->save();

            return redirect('/')->with('msg','you have ordered pizza');
      }
     function destroy($id){
           $pizza=Pizza::findOrFail($id);
           $pizza->delete();
           return redirect('/pizzas')->with('complete','Oder compeleted');
     }


}
