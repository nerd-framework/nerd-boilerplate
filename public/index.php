<?php

use Nerd\Framework\Http\Request\Request;

$baseDir = __DIR__ . '/../';
$environment = 'dev';

require_once $baseDir . '/vendor/autoload.php';

/**
 * Get IO backend
 */
$input  = new \Nerd\Framework\Http\IO\GenericHttpInput();
$output = new \Nerd\Framework\Http\IO\GenericHttpOutput();

/**
 * Get HTTP request
 */
$request = $input->getRequest();

/**
 * Make instance of Application
 */
$application = new \Nerd\Framework\Application($baseDir, $environment);

/**
 * Register all in container.
 */
$application->bind(Request::class, $request);

/**
 * Handle HTTP request by Application
 */
$response = $application->handle($request);

/**
 * Prepare HTTP response before send to output
 */
$response->prepare($request);

/**
 * Send HTTP response to client
 */
$response->render($output);

/**
 * Close HTTP response
 */
$response->close();
