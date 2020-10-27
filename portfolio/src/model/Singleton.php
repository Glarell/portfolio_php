<?php


namespace portfolio\model;

class Singleton extends \Slim\App
{
	private static $_instance;

	public static function getInstance(){
		if(empty(self::$_instance)){
			self::$_instance = new self();
		}
		return self::$_instance;
	}
}