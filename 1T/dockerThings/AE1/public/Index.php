<?php

require_once '../vendor/autoload.php';


$controller = new Ferran\App\Controllers\ListController();

$data = $controller->getModel()->getAllPeople();
$controller->getView()->printHTML($data);