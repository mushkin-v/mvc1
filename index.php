<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Vit\VitKernel;

$request = Request::createFromGlobals();

$kernel = new VitKernel();
$response = $kernel->handle($request);

$response->send();
