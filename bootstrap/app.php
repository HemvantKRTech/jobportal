<?php
use App\Http\Middleware\Admin\RedirectIfAuthenticated;
use App\Http\Middleware\Admin\RedirectIfNotAuthenticated;
use App\Http\Middleware\company\CompanyRedirectIfNotAuthenticated;
use App\Http\Middleware\company\ComapnyRedirectIfAuthenticated;
use App\Http\Middleware\Authorize;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
                Route::middleware('web')
                ->prefix('company')
                ->name('company.')
                ->group(base_path('routes/company.php'));
               
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', [
            RedirectIfAuthenticated::class,
            RedirectIfNotAuthenticated::class,
        ]);
        $middleware->appendToGroup('company', [
            ComapnyRedirectIfAuthenticated::class,
            CompanyRedirectIfNotAuthenticated::class,
        ]);
        $middleware->alias([
            'admin.guest' => RedirectIfAuthenticated::class,
            'admin.auth' => RedirectIfNotAuthenticated::class,
            'company.auth' => ComapnyRedirectIfAuthenticated::class,
            'company.guest' => CompanyRedirectIfNotAuthenticated::class,

            'can' => Authorize::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
