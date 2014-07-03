<?php

class BaseModel extends Eloquent
{

	protected $errors;

	// laravel automatically calls this
	public static function boot()
	{
		parent::boot();

		// contents of closure fires when model is saved

		static::saving(function($model)
		{

			return $model->validate();

		});
	}


	public function validate()
	{
		$validation = Validator::make($this->getAttributes(), static::$rules);
		
		if ($validation->fails())
		{
			$this->errors = $validation->messages();
			
			return false;
		}

		return true;

	}

	public function getErrors()
	{
		return $this->errors;
	}



}