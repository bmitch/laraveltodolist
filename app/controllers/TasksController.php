<?php

use Acme\Services\TaskCreatorService;

class TasksController extends BaseController
{

	protected $taskCreator;

	public function __construct(TaskCreatorService $taskCreator)
	{
		$this->taskCreator = $taskCreator;
	}

	public function index()
	{
		// fetch all tasks
		//$tasks = Task::all();
		$tasks = Task::with('user')->get();

		$users = User::lists('username', 'id');
		// load view to display them

		return View::make('tasks.index', compact('tasks', 'users'));
	}

	public function show($id)
	{
		$task = Task::findOrFail($id);

		return View::make('tasks.show', compact('task'));

	}

	public function store()
	{

		$task = new Task(Input::all());

		if ( ! $task->save())
		{
		
			Redirect::back()->withInput()->withErrors($task->getErrors());
		}

		/*try
		{
			$this->taskCreator->make(Input::all());

		} 

		catch(Acme\Validators\ValidationException $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}*/

		return Redirect::home();
	}
}