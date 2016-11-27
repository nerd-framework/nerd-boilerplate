<?php

namespace app\Services;

use Nerd\Framework\Http\Response\GenericViewResponse;
use Nerd\Framework\Http\Response\Response;
use Nerd\Framework\Http\Response\ResponseContract;
use Nerd\Framework\Http\Services\ExceptionServiceContract;

class ExceptionService implements ExceptionServiceContract
{
    /**
     * Add new exception handler
     *
     * @param $exceptionClass
     * @param callable $handler
     * @return mixed
     */
    public function on($exceptionClass, callable $handler)
    {
        //
    }

    /**
     * Handle exception using exception handler
     *
     * @param \Exception $exception
     * @return ResponseContract
     */
    public function handle(\Exception $exception)
    {
        $class = get_class($exception);

        return new GenericViewResponse('error.php', [
            'title' => $class,
            'message' => $exception->getMessage(),
            'code' => 500
        ], 500);
    }
}
