<?php 
spl_autoload_register(null,false);
spl_autoload_register('Mautoload::Sysloader');
spl_autoload_register('Mautoload::Contloader');
spl_autoload_register('Mautoload::Modloader');
spl_autoload_register('Mautoload::Viewloader');
spl_autoload_register('Mautoload::Temploader');
	class MAutoload{
		static function Sysloader($class){
			$filename=strtolower($class).'.php';
			$file=ROOT.'sys'.DS.$filename;
			if(!file_exists($file)){
				return false;
			}
			require $file;
		}
		static function Contloader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'controllers'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}
		static function Modloader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'models'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}
	static function Viewloader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'templates'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}
	static function Temploader($class){
		$filename=strtolower($class).'.php';
		$file=APP.'views'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}
}
	
	/**
	*
	*Coder
	*makes var_dump easy
	*@author Erik
	*
	**/
	
	
	class Coder{
		static function code($var){
			echo '<pre>'.$var.'</pre></br>';
		}
		static function codear($var){
			echo '<pre>'.var_dump($var).'</pre></br>';
		}
	}
?>