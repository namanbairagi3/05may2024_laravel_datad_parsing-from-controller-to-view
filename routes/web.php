<?php

use App\Http\Controllers\AnilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NmnController;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/nmn', [NmnController::class, 'show']);

//Route::get('/anil123','ControllerName@MethodName')
Route::get('/anil123', [AnilController::class, 'show']);
//Route::get('/anil123','AnilController@show');


Route::get('/naman', function () {
    return view('naman');
});

Route::get('/abhi', function () {
    return view('A.B.C.abhi');
});



Route::get('/naman1', function () {
    $frnd = ['frnd1' => 'Abhishek']; 
    return view('naman1', compact('frnd')); // Pass 'frnd' as a string
});



// Route::get('/naman1', function () {
//     return view('naman1');
// });

Route::get('/naman2', function () {
    return view('naman2');
});

Route::get('/naman3', function () {
    return view('naman3');
});

Route::get('/naman4', function () {
    return view('naman4');
});

Route::get('/naman5', function () {
    return view('naman5');
});

Route::get('/naman6', function () {
    return view('naman6');
});

Route::get('/naman7', function () {
    return view('naman7');
});

Route::get('/naman8', function () {
    return view('naman8');
});

Route::get('/naman9', function () {
    return view('naman9');
});



Route::get('/abhishek1', function () {
    return "Hello From Abhishek1";
});

Route::get('/abhishek2', function () {
    return "Hello From Abhishek2";
});

Route::get('/abhishek3', function () {
    return "Hello From Abhishek3";
});

Route::get('/abhishek4', function () {
    return "Hello From Abhishek4";
});

Route::get('/abhishek5', function () {
    return "Hello From Abhishek5";
});

Route::get('/abhishek6', function () {
    return "Hello From Abhishek6";
});

Route::get('/abhishek7', function () {
    return "Hello From Abhishek7";
});

Route::get('/abhishek8', function () {
    return "Hello From Abhishek8";
});

Route::get('/abhishek9', function () {
    return "Hello From Abhishek9";
});



Route::get('/mobno', function () {
    //$orderid = 12341234; // I have defined a data
    $mobNo = ['mobno'=>121121121]; // PHP associative array key=>Value
    return view('mob.no.mobno',$mobNo);
});

