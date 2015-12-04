<?php 
class Session {
//crear sesion
static function start() {

session_start ();
self::set('id',session_id());
}
//meter valores sesion
static function set($name, $value) {

$_SESSION [$name] = $value;

}
//llamar valores sesion
static function get($name) {

if (isset ( $_SESSION [$name] )) {
return $_SESSION [$name];
} else {
return false;
}
}
static function if_exist(){
	if(array_key_exists($key, $_SESSION)){
		return true;
	}else{
		return false;
	}
}
//Borrar sesion
static function delete($name) {
unset ( $_SESSION [$name] );
}
//finalizar sesion
static function end() {
$_SESSION = array();
session_destroy ();
}
}
?>

