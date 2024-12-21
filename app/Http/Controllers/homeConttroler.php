<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeConttroler extends Controller
{
   // public function index(Request $request){
   //  $nom="noureddine";
   //  $prenom="belm";
   //  $languges=[];
   //  $n1=1;
   //  $n2=3;
   // // $languges=["html5","jsscript","php","python","mysql","java"];
   //  return view("hello",compact("nom","prenom","languges","n1","n2"));
   // }
   public function index(){

   //  return view("../../../resources/views/Layout/master");
    return view("Home");
   }

}
