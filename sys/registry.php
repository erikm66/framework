<?php 
	/**
	*
	*
	*@author Erik
	*Registry:stores navigation info
	*
	*
	**/

	class Registry{
		private $data=array();
		static $instance ;
		//singleton instance
		public static function getInstance(){
			//ther is no instance
			if(!(self::$instance instanceof self)){
				self::$instance=new self();
				return self::$instance;
			}else{
				return self::$instance;
			}
		}
		function __construct(){
			$this->data=array();
			$this->load_conf();
		}
		//methods __set
		function __set($var, $valor){
			if(!array_key_exists($var, $this->data))
			{
				$this->data[$var] = $valor;
			}
		}
		//methods __get
		function __get($var){
			if(array_key_exists($var, $this->data)){
				return $this->data[$var];
			}else{
			return null;	}
	}
	function __unset($key=null){
	if($key!=null){
	if(array_key_exists($key,$this->data)){
		$id=array_search($key,$this->data);
		unset($this->data[$key]);
	}
	}
	else{
	unset($this->data);
	}
}
	function load_conf(){
		$file= APP.'Config.json';
		$json_str=file_get_contents($file);
		$array_json=json_decode($json_str);
		foreach($array_json as $key => $value){
			$this->data[$key]=$value;		}
		}
	}
	

?>