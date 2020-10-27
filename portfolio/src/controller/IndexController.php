<?php
namespace portfolio\controller;


use portfolio\view\IndexView;

class IndexController {

	public static function showIndex() {
		$vue = new IndexView();
		$vue->render();
	}

	public static function resultForms() {
		// TODO FILTRERS
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tel = $_POST['phone'];
		$message = $_POST['message'];
		$footer = "Nom: " . $name . "\n" . "Tel: " . $tel;
		mail($email, "Sujet Email", $message . "\n" . $footer, "headers");
	}
}
