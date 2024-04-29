<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;
use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    // public function report(Throwable $exception)
    // {
    //     $request = app('request');
    //     dd(app('request'));

    //     $body = [
    //         "request_url" => $request->fullUrl(),
    //         "request_method" => $request->method(),
    //         "payload" => json_encode($request->all()),
    //         "error_type" => get_class($exception),
    //         "error_message" => $exception->getMessage(),
    //         "tag" => 'config',
    //         "meta" => [
    //             "error_line" => $exception->getLine(),
    //             "stacktrace" => $exception->getTraceAsString(),
    //         ]
    //     ];
    //     dd($body);
    //     parent::report($exception);
    // }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Throwable
     */
    // public function render($request, Throwable $exception)
    // {
    //     return parent::render($request, $exception);
    // }
}
