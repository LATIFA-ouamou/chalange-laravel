<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller

{
     private $todo=["taskA","taskC","taskl","taskz","tasky"];
    public function indix(){
       return view('Todo',["Todoo"=>$this->todo]);

    } 
public function add(Request $request){
    $this->todo[]=$request->todo;
    return redirect('/');
}



}
 