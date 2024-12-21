<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Noureddine extends Controller
{
   public function index8(Request $request){
    return view("noureddine",["nom"=>$request->nom,"prenom"=>$request->prenom,"age"=>$request->age,"bac"=>$request->bac]);
   }
}

?>