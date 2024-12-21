<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employees extends Controller
{
public function employe_li1(Request $request){
    $employees = [
        1 => ['id' => 1, 'nom' => 'Doe', 'prenom' => 'John', 'age' => 30, 'poste' => 'Manager'],
        2 => ['id' => 2, 'nom' => 'Smith', 'prenom' => 'Jane', 'age' => 25, 'poste' => 'Développeuse'],
        3 => ['id' => 3, 'nom' => 'Brown', 'prenom' => 'Bob', 'age' => 28, 'poste' => 'Designer'],
    ];
    return view("employees.index",compact("employees"));
}
public function employe_li2(Request $request){
    $employees = [
        1 => ['id' => 1, 'nom' => 'nahid', 'prenom' => 'ahmad', 'age' => 30, 'poste' => 'Manager'],
        2 => ['id' => 2, 'nom' => 'karim', 'prenom' => 'yassin', 'age' => 25, 'poste' => 'Développeuse'],
        3 => ['id' => 3, 'nom' => 'belm', 'prenom' => 'karim', 'age' => 28, 'poste' => 'Designer'],
    ];
    return view("employees.index",compact("employees"));
}
public function employe_li3(Request $request){
    $employees = [
        1 => ['id' => 1, 'nom' => 'NOUREDDINE', 'prenom' => 'BELMKARBCH', 'age' => 30, 'poste' => 'Manager'],
        2 => ['id' => 2, 'nom' => 'AYOUP', 'prenom' => 'FADILI', 'age' => 25, 'poste' => 'Développeuse'],
        3 => ['id' => 3, 'nom' => 'MOHAMD', 'prenom' => 'SKALI', 'age' => 28, 'poste' => 'Designer'],
    ];
    return view("employees.index",compact("employees"));
}

}
