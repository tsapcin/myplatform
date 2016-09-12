<?php
require_once '../core/controller.php';

class AppController extends Controller
{
	
	public function index()
	{
		return $this->view('index');
	}

	public function show()
	{
		return $this->view('show');
	}
}
	

?>