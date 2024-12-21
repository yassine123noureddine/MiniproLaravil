<?php
    $employees = [
        1 => [
            'id' => 1,
            'nom' => 'Doe',
            'prenom' => 'John',
            'age' => 35,
            'subordonnees' => [
                ['id' => 101, 'nom' => 'Smith', 'prenom' => 'Alice', 'poste' => 'Assistant'],
                ['id' => 102, 'nom' => 'Johnson', 'prenom' => 'Mark', 'poste' => 'Junior Developer']
            ]
        ],
        2 => [
            'id' => 2,
            'nom' => 'Brown',
            'prenom' => 'Emily',
            'age' => 29,
            'subordonnees' => [
                ['id' => 201, 'nom' => 'Taylor', 'prenom' => 'Chris', 'poste' => 'Designer']
            ]
        ],
        3 => [
            'id' => 3,
            'nom' => 'White',
            'prenom' => 'Sophia',
            'age' => 42,
            'subordonnees' => []
        ]
    ];

use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeConttroler;
use App\Http\Controllers\Noureddine;
use App\Http\Controllers\Employees;
use App\Http\Controllers\informationControler;
use App\Http\Controllers\profielControler;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello/{nom}/{prenom}/{n}',function(Request $request){
//     // dd($request);
//     return view("hello",["nom"=> $request->nom ,"prenom"=> $request->prenom,"n"=> $request->n]);
// });
// Route::get("/",["App\Http\Controllers\homeConttroler","index"]);
// Route::get("/noureddine/{nom}/{prenom}/{age}/{bac}",["App\Http\Controllers\Noureddine","index8"])    ;

// Route::get('/contact/hello',function(){
//     return view("contact");
// });
// Route::get('/Home/{n}',function($n){
//     return view("Home")->with("hello",$n);
// });

Route::get('/employee/{id?}', function ($id = null) use ($employees) {
    if ($id === null) {
        // Si l'ID n'est pas fourni, retourner une vue générique ou la liste des employés
        return view('employe_list', ['employees' => $employees]);
    }

    if (!isset($employees[$id])) {
        abort(404, "Employé non trouvé.");
    }

    // Si l'ID est fourni et valide, retourner les détails de l'employé
    return view('employee', ['employee' => $employees[$id]]);
})->name('employee');

// Route pour afficher les subordonnés d’un employé
Route::get('/employee/{id}/subordinates', function ($id) use ($employees) {
    if (!isset($employees[$id])) {
        abort(404, "Employé non trouvé.");
    }
    return view('subordinates', ['employee' => $employees[$id]]);
});

// Route pour afficher les détails d’un subordonné
Route::get('/employee/{id}/subordinates/{subordinateId}', function ($id, $subordinateId) use ($employees) {
    if (!isset($employees[$id])) {
        abort(404, "Employé non trouvé.");
    }
    $subordinate = collect($employees[$id]['subordonnees'])->firstWhere('id', $subordinateId);
    if (!$subordinate) {
        abort(404, "Subordonné non trouvé.");
    }
    return view('subordinateDetails', ['employee' => $employees[$id], 'subordinate' => $subordinate]);
});


// Route::get('/', function () {
//     return view('home');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/lngage', function () {
    return view('lngage');
});
// Route::get('/employees', function () {
//     $employees = [
//         1 => ['id' => 1, 'nom' => 'Doe', 'prenom' => 'John', 'age' => 30, 'poste' => 'Manager'],
//         2 => ['id' => 2, 'nom' => 'Smith', 'prenom' => 'Jane', 'age' => 25, 'poste' => 'Développeuse'],
//         3 => ['id' => 3, 'nom' => 'Brown', 'prenom' => 'Bob', 'age' => 28, 'poste' => 'Designer'],
//     ];
//     return view('employees.index', ['employees' => $employees]);
// })->name('employees');
// Route::get('/employees',[Employees::class,"employe_li1"])->name('employees');
// Route::get('/employees/{n}',[Employees::class,"employe_li2"])->name('employees/{n}')->where('n', '[0-9]+');
// Route::get('/employees/{elemnet}',[Employees::class,"employe_li3"])->name('employees/{elemnet}');
// new controler
// Route::get("/",["App\Http\Controllers\homeConttroler","index"]);

// Route::get("/information",[informationControler::class,"information"]);
// Route::get("/profilae",[profielControler::class,"profiel"])    ;
// Route::get("/profilae",[profielControler::class,"profiel"])    ;


Route::get('/', function () {
    return view('testEcomrece');
});
Route::get('/Homeecomer', function () {
    return view('Homeecomer');
});