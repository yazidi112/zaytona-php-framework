<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once("../Core/Env.php"); 
require_once("../Core/Database.php");    
require_once('../Core/abstract/Controller.php');
require_once('../Core/abstract/Repository.php');
require_once('../Core/Router.php');
require_once('../Core/Autoloader.php');

Autoloader::register();
Router::run("/article");
