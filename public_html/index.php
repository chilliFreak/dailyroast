<?
define('BASE_PATH', realpath($_SERVER['DOCUMENT_ROOT'].'/../'));
require_once BASE_PATH.'/fatfree/lib/base.php';
F3::route('GET /','home');
	function home() {
		echo 'Hello, world!';
	}
F3::run();