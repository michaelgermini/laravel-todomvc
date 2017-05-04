<?php

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
/*
Route::get('/about', function () {
    return "Hi about page";
});


Route::get('/post', 'TasksController@show_post', array('as'=>'admin.home' ,function () {
    $url = route('admin.home');
    return "This url is ". $url;
}));
Route::get('/', function () {
    return view('welcome', ['name' => 'Samantha']);
});
Route::get('/post/{id}/{name}', function ($id, $name) {
    return "This is post numbert ". $id . " " . $name;
});
//Route::get('admin/posts/example', array('as'=>'admin.home' ,function () {
//    $url = route('admin.home');
//    return "This url is ". $url;
//}));
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
//Route::get('/tasks/{id}', 'TasksController@index');

//Route::get('post/{id}', 'TasksController@show_post');
Route::resource('tasks', 'TasksController');
*/

Route::get('/insert', function(){
DB::insert('insert into post(title, content, id) value(?, ?, ?)', ['lavarel', 'Lavarel', '1']);  
});



Route::resource('tasks', 'TasksController');


Route::get('/', function () {
    return view('welcome', compact('tasks'), ['name' => 'Samantha']);
});

Route::get('/post', 'TasksController@show_post', array('as'=>'admin.home' ,function () {
    $url = route('admin.home');
    return "This url is ". $url;
}));

Route::get('/contact', 'TasksController@contact');

Route::get('/index', 'TasksController@index');

Route::get('/tasks/{id}', 'TasksController@show');

Route::get('/read', 'TasksController@read');

Route::get('/create', 'TasksController@create');