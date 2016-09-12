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

		public function view($view)
		{
			echo file_get_contents('../view/' . $view . '.html');
		}
	}

?>