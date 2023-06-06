<?php

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
    $arrs=[1,3,49,11];
    $length_of_arr=count($arrs);
   $largest_number=$arrs[0];
   for($i=1;$i<$length_of_arr;$i++)
   {
    if($arrs[$i]>$largest_number){
        $largest_number=$arrs[$i];

    }
   }
   dd($largest_number);
    // return view('welcome');
});
