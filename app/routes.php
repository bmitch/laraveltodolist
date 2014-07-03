<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);

Route::post('/tasks', 'TasksController@store');

Route::patch('tasks/{id}', [ 'as' => 'tasks.update', 'uses' => 'TasksController@update']);

Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', 'UserTasksController@index');


/*Route::get('{username}/tasks', function($username)
{
	$user = User::whereUsername($username)->first();
	return $user->tasks;
	// get all tasks associated with the user

	// instead of this we can use eloquent
	//return Task::whereUserId($user->id)->get();
});

Route::get('{username}/tasks/{id}', function($username, $id)
{

	$user = User::with('tasks')->whereUsername($username)->first();
	$task = $user->tasks;

	return View::make('tasks.show', compact('user' ,'task'));
	// load a view to display it
});	
*/