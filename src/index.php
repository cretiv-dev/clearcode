<?php
require_once './Application.php';
$app = Clearcode\Application::getInstance();
$app->assigVariableToView('imie','Grzegorz');
$app->setTemplate('index.tpl');

