<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/contact', function () {
//    return view('contact');
// });

Route::view('/contact', 'contact');

// You can pass variables directly through the view function, like in the third parameter.
// so in this case, the third parameter register all possible variables. This works in order
// to make one single view, and be "adaptable" depending on the information we want to show.
Route::view('/pass-data', 'pass-data', ['greeting' => 'Hello', 'person' => request('person', 'World')]);

// for the function above, this will be the equivalent if we used the get method directly:
// Route::get('/pass-data', function () {
//    return view('pass-data',  ['greeting' => 'Hello', 'person' => request('person')]);
// });

Route::view('/directives', 'directives', [
    'tasks' => [
        'Go to the market',
        'Finish the homework',
        'Clean the house',
    ],
]);
//Route::view('/ideas','ideas');
Route::get('/ideas', function () {
    $ideas = session()->get('ideas', []);
    return view('ideas', ['ideas' => $ideas]);
});
Route::post('/ideas', function (Request $request) {
    // There are several ways of getting the information of the request. for the moment
    // we have displayed three diferent methods. I belive just looking at the code the most simple one
    // is using the function request.
//    $idea = \Illuminate\Support\Facades\Request::input('idea');
    $idea = request('idea');
    // The option of using the parameter request it also looks good, it would be ideal, when we learn
    // how can we "define" the actual data that the request SHOULD have.
//    $idea = $request->idea;

    session()->push('ideas', $idea);

    return redirect('/ideas');

});

Route::delete('/ideas', function () {
    session()->forget('ideas');
    return redirect('/ideas');
});

