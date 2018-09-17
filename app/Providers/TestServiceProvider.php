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

    // instance
    $test = new Test();
    $test->name="this is instance";
    
    $this->app->instance('instance',$test);

    // singleton
    $this->app->singleton('singleton',function(){
         $singleton = new Test();
         $singleton->name='singleton';
         return $singleton;
    });

    // bind
    $this->app->bind('bind',function(){
        $bind = new Test();
        $bind->name='bind';
        return $bind;
    });

    // Binding Interfaces To Implementations
    $this->app->bind(Vehicle::class,Car::class);

    // Contextual Binding
    $this->app->when(CarController::class)->needs(Vehicle::class)->give(Car::class);
    $this->app->when(BicycleController::class)->needs(Vehicle::class)->give(Bicycle::class);

    // Tagging
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
