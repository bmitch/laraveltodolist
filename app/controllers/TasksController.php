<?php

class TasksController extends BaseController
{

	public function index()
	{
		// fetch all tasks
		//$tasks = Task::all();
		$tasks = Task::with('user')->get();
		// load view to display them

		return View::make('tasks.index', compact('tasks'));
	}

	public function show($id)
	{
		$task = Task::findOrFail($id);

		return View::make('tasks.show', compact('task'));

	}
}