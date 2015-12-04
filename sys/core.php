<?php
require 'sys/request.php';
class Core{
	static private $controller;
	static private $action;
		static function init(){
			//echo 'CORE arrenca app';
			//recuperar la request
				//echo $_SERVER['REQUEST_URI'];
				Request::retrieve();
				$controller=Request::getCont();
				self::$controller=$controller;
				//self::$controller=Request::getCont();
				//Coder::code($controller);
				$action=Request::getAct();
				self::$action=$action;
				//self::$action=Request::getAct();
				//Coder::code($action);
				$params=Request::getParams();
				//Coder::codear($params);
				self::router();
		}
			static function router()
			{
				//echo 'Routing.......';
				//Coder::code(self::$controller);
				//Coder::code(self::$action);
				//if exists the controller then
				//make an instance of controller
				$contr_call=(self::$controller!="")?self::$controller:'home';
				$action_call=(self::$action!="")?self::$action:'home';
				$filename=$contr_call.'.php';
				$file=APP.'controllers'.DS.ucfirst($filename);
				if(is_readable($file))
				{
					$cont=new $contr_call();
					if(is_callable(array($cont,$action_call))){
						call_user_func(array($cont,$action_call));
					}
					//No action
					else{
						echo 'No action!';
					}
				}
				//No controller
				else{
					echo 'No controller!';
				}
			}
	}
