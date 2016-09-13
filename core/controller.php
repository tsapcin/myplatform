<?php

	/**
	* 
	*/
	class Controller
	{
		
		function __construct()
		{
			# code...
		}

		public function getContent($value)
		{
			return file_get_contents($value);
		}

		public function view($view)
		{
			$content = '../view/' . $view . '.html';
			require_once '../view/app/app.html';
		}
	}

?>