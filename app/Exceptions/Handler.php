<?php

namespace App\Exceptions;

use Exception;
use Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        /**
         * Redirect if token mismatch error
         * Usually because user stayed on the same screen too long and their session expired
         */
        if ($e instanceof TokenMismatchException) {
            return redirect()->route('auth.login');
        }

        /**
         * All instances of GeneralException redirect back with a flash message to show a bootstrap alert-error
         */
        if ($e instanceof GeneralException) {
            Session::flash('flash_message', "$e");
            Session::flash('flash_type', 'danger');

            return redirect()->back()->withInput();
        }

        if ($e instanceof GeneralException) {
            Session::flash('flash_message', "$e");
            Session::flash('flash_type', 'danger');

            return redirect('auth.login');
        }
        
        return parent::render($request, $e);
    }
}
