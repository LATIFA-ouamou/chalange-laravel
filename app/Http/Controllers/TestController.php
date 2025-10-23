<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //




    function indix(){
       return  "Je suis le contrôleur TestController";
    } 

     function show(){
       return  view('Accueil');
    } 
      function  greet(string $prenom, int $age){

 return  "Bonjour, $prenom , $age ";
      }
      function showArticle(int $id){
        return   "Vous consultez l’article $id";
      }
    }