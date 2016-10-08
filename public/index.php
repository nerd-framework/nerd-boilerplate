<?php

$applicationBaseDir = \Nerd\PathUtils\go(__DIR__, '..');

/**
 * Get instance of global Input and Output Interfaces
 *
 * @var \Nerd\Framework\Http\InputContract $input
 * @var \Nerd\Framework\Http\OutputContract $output
 */
$input  = new \Nerd\Framework\Http\IO\GenericHttpInput();
$output = new \Nerd\Framework\Http\IO\GenericHttpOutput();

/**
 * Get HTTP Request from Input Interface
 */
$request = $input->getRequestObject();

/**
 * Make instance of Application
 */
$application = new \Nerd\Framework\Application($applicationBaseDir);

/**
 * Save entry point into Application
 */
\Nerd\Framework\Application::setInstance($application);

/**
 * Handle HTTP Request by Application
 */
$response = $application->handle($request);

/**
 * Prepare HTTP Response to be sent to Output
 */
$response->prepare($request);

/**
 * Send HTTP Response to Output
 */
$response->render($output);
