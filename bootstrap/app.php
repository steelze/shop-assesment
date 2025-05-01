<?php

use App\Helpers\RespondWith;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->shouldRenderJsonWhen(function (Request $request, Throwable $e) {
            return ($request->is('api/*')) ? true : $request->expectsJson();
        })->render(function (Throwable $e, Request $request) {
            if ($e instanceof ValidationException) {
                $errors = array_map(fn($error) => $error[0], $e->errors());
                return RespondWith::error($errors, 'Validation Error', Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        });
    })
    ->create();
