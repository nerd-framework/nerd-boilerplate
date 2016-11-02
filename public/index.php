<?php

use Nerd\Framework\Http\Request\Request;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Get instance of Application
 */
$application = require __DIR__ . '/../boot/Bootstrap.php';

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
