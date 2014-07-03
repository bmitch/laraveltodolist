<?php

class UserTasksController extends BaseController
{
	public function index($username)
	{

		$tasks = Task::byUsername($username);

		return View::make('tasks.index', compact('tasks'));
	}

	public function show($username, $taskId)
	{
		// grab the task by id ssociated with user

		$task = Task::find($taskId, $username);

		return View::make('tasks.show', compact('task'));
	}
}