<?php

include 'app/Http/Core/View.php';

$view = new View();

$view->loadLayouts('top');
$view->loadContent('welcome');
$view->loadLayouts('tail');
