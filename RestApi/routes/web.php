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
    $arr=[1,4,3,446,87];
   $len=count($arr); //6
  $largest=$arr[0]; //1
  for($i=1;$i<$len;$i++)
  {
    if($arr[$i]>$largest)
    {
        $largest=$arr[$i];
    }
   
  }
  print_r($largest);
    // return view('welcome');
});
