<?php
require_once 'inc/config.php';
require_once 'model/Receita.php';
require_once 'controller/ReceitaController.php';

$app = new ReceitaController();

$app->create();