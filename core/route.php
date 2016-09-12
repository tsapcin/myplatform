<?php
	/**
	* 
	*/
	/**
	* 
	*/

	class Route
	{
		public static $urls = array();

		public static function set($url, $action){

			$action = explode("->", $action);

			if(count($action) != 2) {
				return;
			}

			if(!file_exists('../controllers/' . $action[0] . '.php')){
				return;
			}

			require_once '../controllers/' . $action[0] . '.php';

			if(!class_exists($action[0])) {
				return;
			}

			$ob = new $action[0];

			if (!method_exists($ob, $action[1])) {
				return;
			}
			
			$ob = null;



			$rout = array(
				'url' => $url,
				'controller' => $action[0],
				'action' => $action [1],
			);

			if(!in_array($rout, Route::$urls)) {
				Route::$urls[] = $rout;
			}
		}

		public static function actionExecute($url)
		{
			foreach (Route::$urls as $value) {
				if ($value['url'] == $url) {
					$controller = $value['controller'];
					$action = $value['action'];

					require_once '../controllers/' . $controller . '.php';

					$obj = new $controller;
					$obj->$action();
					return;
				}
			}
			
			echo "not found";//страница не найдена
		}

	}
?>