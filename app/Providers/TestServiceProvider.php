<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\CarController; 
use App\library\services\Test;
use App\library\services\Car;
use App\library\services\BeanTag;
use App\library\services\Vehicle;
use App\library\services\Bicycle;
use App\Http\Controllers\BicycleController; 

class TestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    $test = new Test();
    $test->name="this is instance";
    
    $this->app->instance('instance',$test);

    // $this->app->when('App\library\services\BindingPrimitive')->needs('$integer')->give(.1);

    $this->app->singleton('singleton',function(){
         $singleton = new Test();
         $singleton->name='singleton';
         return $singleton;
    });

    $this->app->bind('bind',function(){
        $bind = new Test();
        $bind->name='bind';
        return $bind;
    });

    $this->app->bind(Vehicle::class,Car::class);

    // $this->app->when(CarController::class)->needs(Vehicle::class)->give(Car::class);
    // $this->app->when(BicycleController::class)->needs(Vehicle::class)->give(Bicycle::class);

    $this->app->tag(['singleton', 'bind'], 'binding');

    $this->app->bind('tagged',function($app){
        return new BeanTag($app->tagged('binding'));
    });


    // event binding call
    $this->app->resolving('tagged', function ($object, $app) {
        dd($object);
    });

    }
}
