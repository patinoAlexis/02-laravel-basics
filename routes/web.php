<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
//Route::get('/contact', function () {
//    return view('contact');
//});

Route::view('/contact', 'contact');

// You can pass variables directly through the view function, like in the third parameter.
// so in this case, the third parameter register all possible variables. This works in order
// to make one single view, and be "adaptable" depending on the information we want to show.
Route::view('/pass-data', 'pass-data', ['greeting' => 'Hello', 'person' => request('person', 'World')]);

// for the function above, this will be the equivalent if we used the get method directly:
//Route::get('/pass-data', function () {
//    return view('pass-data',  ['greeting' => 'Hello', 'person' => request('person')]);
//});


Route::view('/directives', 'directives', [
    'tasks' => [
        'Go to the market',
        'Finish the homework',
        'Clean the house'
    ]
]);
