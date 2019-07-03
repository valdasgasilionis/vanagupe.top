<?php

use Illuminate\Http\Request;
use App\rental;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     $rentals = rental::all();
   /*  return $rentals; */
    return view('welcome', compact('rentals'));
});
Auth::routes();

Route::post('/edit', function(Request $request) {
    $rental = rental::where('id', $request->id)->get();
    $rental[0]->price = $request->price;
    $rental[0]->save();
    return back();
});
Route::post('/reserved', function(Request $request) {
    $rental = rental::where('id', $request->id)->get();
    if ($rental[0]->reserved = 0) {
        $rental[0]->reserved = 1;
        $rental[0]->save();
    } else {
        $rental[0]->reserved = 0;
        $rental[0]->save();
    }  
    
    return back();
});


