<?php
require_once 'Config/path.php';
$controller = isset($GET['c']) ? $_GET['c'] : DEFAULT_CONTROLLER;
$action = isset($GET['a']) ? $_GET['a'] : DEFAULT_ACTION;

require CONTROLLER_PATH.'index.php';
?>