<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LamaUrgen;
use App\Http\Controllers\PhotoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route:: get ('/demo',function(){
//     echo "Hi Urgen";
// });
// Route:: post('/dashboard', function(){
//     echo "Hi lama";
// });

// Route:: get ('/home', function(){
//     echo "Hello Gentleman";
// });
// Route:: get ('/test/{name}',function ($name){
//     echo $name;
// });
// Route:: get ('/lama/{name?}',function ($name=null){
//     $demo = "<h2>  Just do it</h2>";
//     $data=  compact ('name','demo');
//     return view('index')->with($data);
// });

// Route:: get ('/', function(){
//     return view('home');
// });
// Route:: get ('/about', function(){
//     return view('about');
// });
//  


Route:: get('/{name?}', function ($name=null){
  $data=compact ('name');
  return view ('home')-> with($data);

});