## Typed Requests

Superglobals can potentially return primitive types or arrays, so every time we want to get, for example, a string from a query string variable, we also have to handle the case where an array is passed in. This is cumbersome, so this package provides request classes to make sure we get back exactly what we want.

### Laravel

There is a Laravel-specific class that extends the `Illuminate\Http\Request` object. Just import `DerekHamilton\TypedRequest\LaravelRequest` instead.

```php
namespace App\Http\Controllers;

use DerekHamilton\TypedRequest\LaravelRequest as Request;

class MyController extends Controller
{
    public function show(Request $request)
    {
        dump($request->inputInt('foo'));
        dump($request->inputString('foo'));
        dump($request->inputArray('foo'));

        dump($request->queryInt('foo'));
        dump($request->queryString('foo'));
        dump($request->queryArray('foo'));

        dump($request->postInt('foo'));
        dump($request->postString('foo'));
        dump($request->postArray('foo'));

        dump($request->headerInt('foo'));
        dump($request->headerString('foo'));
        dump($request->headerArray('foo'));

        dump($request->cookieInt('foo'));
        dump($request->cookieString('foo'));
        dump($request->cookieArray('foo'));
    }
}
```

### Superglobals

To depend on the built-in PHP superglobals, import `DerekHamilton\TypedRequest\GlobalRequest`.

```php
namespace App\Http\Controllers;

use DerekHamilton\TypedRequest\GlobalRequest as Request;

class MyController extends Controller
{
    public function show(Request $request)
    {
        dump($request->inputInt('foo'));
        dump($request->inputString('foo'));
        dump($request->inputArray('foo'));

        dump($request->queryInt('foo'));
        dump($request->queryString('foo'));
        dump($request->queryArray('foo'));

        dump($request->postInt('foo'));
        dump($request->postString('foo'));
        dump($request->postArray('foo'));

        dump($request->headerInt('foo'));
        dump($request->headerString('foo'));
        dump($request->headerArray('foo'));

        dump($request->cookieInt('foo'));
        dump($request->cookieString('foo'));
        dump($request->cookieArray('foo'));
    }
}
```
