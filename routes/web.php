<?php
use Illuminate\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'hi';
});

Route::get('/my-route', function () {
    //echo "<h1> My Route Page</h1>";
    //return view('')
    //return viem('myroute');
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Lalaval";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route65160236',function(Request $req){
    $data['myinput'] = $req -> input('myinput');
    return view ('myroute65160236',$data);
});

Route::get('/my-display65160236', function () {
    return view('myfolder.Input');
});

Route::post('/my-display65160236',function(Request $req) {
    $data['myinputnumber'] = $req -> Input('myinputnumber');
    return view('mydisplay65160236', $data);
});
