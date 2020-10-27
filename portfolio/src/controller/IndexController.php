<?php
namespace portfolio\controller;


use portfolio\view\IndexView;

class IndexController {

	public static function showIndex() {
		$vue = new IndexView();
		$vue->render();
	}

	public static function resultForms() {
		// TODO FILTERS
		$email = htmlspecialchars($_POST['email']);
		$tel = htmlspecialchars($_POST['phone']);
		if (filter_var($email,FILTER_VALIDATE_EMAIL) && filter_var($tel,FILTER_VALIDATE_INT)) {
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			$tel = filter_var($tel, FILTER_SANITIZE_NUMBER_INT, FILTER_SANITIZE_STRING);
			$name = htmlspecialchars($_POST['name']);
			$name = filter_var($name, FILTER_SANITIZE_STRING, FILTER_SANITIZE_NUMBER_INT);
			$message = htmlspecialchars($_POST['message']);
			$message = filter_var($name, FILTER_SANITIZE_STRING, FILTER_SANITIZE_SPECIAL_CHARS);
			$footer = "Nom: " . $name . "\n" . "Tel: " . $tel;
			mail($email, "Sujet Email", $message . "\n" . $footer, "headers");
		}
	}
}
