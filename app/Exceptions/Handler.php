<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Nichozuo\LaravelHelpers\Traits\ExceptionsRenderTrait;
use Throwable;

class Handler extends ExceptionHandler
{
    use ExceptionsRenderTrait;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (Exception $e, $request) {
            $data = $this->renderExceptionsJson($e, $request);
            $status = $data['status'];
            unset($data['status']);
            return response()->json($data, $status);
        });
    }
}
