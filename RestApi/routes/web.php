<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\EventController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|+96551268397
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

Route::get('unique',function(){
    $arrs=[1,3,6,7,1];
    $arr=[];
    foreach($arrs as $key=>$value)
    {
        $arr[$value]=$value;  
             
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
    }
    echo "<pre>";print_r($arr);echo"</pre>";
});
Route::get('event',[EventController::class,'index']);

Route::get('ln',function(){
    $arrs=[1,4,23,700];
    $len=count($arrs);
    $largest_number=$arrs[0];
    for($i=1;$i<$len;$i++){
        if($arrs[$i]>$largest_number)
        {
            $largest_number=$arrs[$i];
        }

    }
    dd($largest_number);
});
