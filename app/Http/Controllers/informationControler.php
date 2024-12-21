<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informationControler extends Controller
{
    public function information(Request $request){
        $rows = [
            ['id' => 1, 'nom' => 'Alice', 'maiter' => 'Math'],
            ['id' => 2, 'nom' => 'Bob', 'maiter' => 'Science'],
            ['id' => 3, 'nom' => 'Charlie', 'maiter' => 'History']
        ];
        return view("sittinges",compact("rows"));
    }
}

