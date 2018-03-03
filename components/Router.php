<?php
	 class Router 
	 {
	 	private $routes;

	 	//конструктор мать его
	 	public function __construct ()
	 	{
	 			$routesPath = ROOT.'/config/routes.php';
	 			$this->routes = include($routesPath);
	 	}

	 	// нехуй делать коментарий
	 	private function soska() {
	 		return "получи соску нах";
	 	}

	 	// Возвращаем строку запроса
	 	private function getURI()
	 	{
	 		if (!empty($_SERVER['REQUEST_URI'])) {
	 			return trim($_SERVER['REQUEST_URI'], '/');
	 		}
	 		
	 	}

	 	//основная функция РАН ВАСЯ РАН
	 	public function run(){

	 	$uri = $this->getURI();

	 	//проверяем наличие запроса в routes.php		
	 	foreach ($this->routes as $uriPattern => $path) 
	 			{
	 				//сравниваем $uriPattern и $uri
	 				if(preg_match("~$uriPattern~", $uri)) 
		 				{
		 					//Определить какой контроллер
		 					// и action обрабатывают запрос
 							$segments = explode('/', $path);

 							$controllerName = array_shift($segments).'Controller';
 							$controllerName = ucfirst($controllerName);
 							

 							$actionName = 'action'.ucfirst(array_shift($segments));
 							
 							echo "Контроллер: ".$controllerName."<br>";
 							echo "метод: ". $actionName;

 							//echo '<pre>';
 							//print_r($segments);
 							//echo '<pre>';

		 					//echo $path;
		 				}
	 			}


	 		/*	if ($_SERVER['REQUEST_URI']=="/soska/") {
	 				echo $this->soska();	
	 			} */

	 			//задачи
	 		// получить строку запроса

	 		// проверить наличие такого запроса

	 		//если есть совпадение, определить какой контроллер и action обрабатывает запрос

	 		//подключить файл класса-контроллера

	 		//создать обьект, вызвать метод - т.е. Action
	 		//print_r($this->routes);
	 		//echo "<br>класс Router, метод run";
	 	}






	 }

?>