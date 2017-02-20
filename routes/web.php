<?php

//use App\Task;

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');


//Route::get('/tasks', function () {

	//Using query
	//-----------------------------------------------
	//**$tasks = DB::table('tasks')->latest()->get();
	//-----------------------------------------------

	//Entre ('tasks')-> et get(), on peut passer une fonction. Exemple : ('tasks')->latest()->get(); pour trier dans un ordre particulier

	// Using Eloquent
	//----------------------------------------
	//** $tasks = Task::all();
	//----------------------------------------


	//Now all tasks will load this field (index)
	//----------------------------------------
    //** return view('tasks.index', compact('tasks'));
	//----------------------------------------

//});

//1)If the user wants to visit a specific task, we fecth it by id

	//Route::get('/tasks/{task}', function ($id) {

	//2) Find the task that has that id
	//----------------------------------------
	//**$task = DB::table('tasks')->find($id);
	//----------------------------------------

	//--------------------------
	//**$task = Task::find($id);
	//--------------------------

	//Load the view through the variable(In this case, we put {{tasks->body}} in show.blade.php)
	//---------------------------------------------
    //**return view('tasks.show', compact('task'));
	//---------------------------------------------

//});
 
Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

//Video 11 Gestion formulaire
Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');





// Controller => PostsController

// Eloquent model => Post

// Migration => create_posts_table

