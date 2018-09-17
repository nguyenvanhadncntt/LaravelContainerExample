## Model
    -All model in App\library\services
## File provider config
    -TestServiceProvider in App\Providers
## Demo laravel container
    - Binding simple: method in provider bind() -> class model: Test -> controller BindController -> url: localhost:8000/bind
    - Singleton: method in provider singleton() -> class model: Test -> controller SingletonController -> url: localhost:8000/singleton
    - Instance: method in provider instance() -> class model: Test -> controller InstatnceController -> url: localhost:8000/instance
