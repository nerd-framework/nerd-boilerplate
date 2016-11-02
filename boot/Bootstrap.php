<?php

use Nerd\Framework\Http\Response\GenericViewResponse;

$baseDir = __DIR__ . '/../';
$environment = 'dev';

require_once $baseDir . '/vendor/autoload.php';


/**
 * Make instance of Application
 */
$application = new \Nerd\Framework\Application($baseDir, $environment);


/**
 * Set base template directory for GenericViewResponse
 */
$templateDir = $application->config('core.templateDir');

GenericViewResponse::setViewDirectoryPrefix($templateDir);


/**
 * Return $application
 */
return $application;
