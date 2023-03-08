<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'))
                ->group(base_path('routes/vehicle.php'))
                ->group(base_path('routes/order.php'))
                ->group(base_path('routes/room.php'))
                ->group(base_path('routes/hotel.php'))
                ->group(base_path('routes/singing.php'))
                ->group(base_path('routes/trip.php'))
                ->group(base_path('routes/place.php'))
                ->group(base_path('routes/dashboard.php'));


            Route::middleware('web')
                ->group(base_path('routes/web.php'))
                ->group(base_path('routes/web/vehicle.php'))
                ->group(base_path('routes/web/order.php'))
                ->group(base_path('routes/web/room.php'))
                ->group(base_path('routes/web/hotel.php'))
                ->group(base_path('routes/web/signning.php'))
                ->group(base_path('routes/web/trip.php'))
                ->group(base_path('routes/web/place.php'))
                ->group(base_path('routes/web/dashboard.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
