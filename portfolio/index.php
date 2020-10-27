<?php


use portfolio\controller\IndexController;
use Slim\Exception\NotFoundException;
use Slim\Http\Request;

require 'vendor/autoload.php';

$app = new \Slim\App();

$configuration = [
	'settings' => [
		'displayErrorDetails' => true,
	],
];

$container = new \Slim\Container($configuration);
$app = new \Slim\App($container);

$app->get('/', function () {
	IndexController::showIndex();
})->setName('index');

$app->post('/', function () {
	IndexController::resultForms();
})->setName('indexForms');

$app->run();

$email = "pilou.tondon@hotmail.fr";

