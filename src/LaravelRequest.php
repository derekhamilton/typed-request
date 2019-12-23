<?php
namespace DerekHamilton\TypedRequest;

use Illuminate\Http\Request as HttpRequest;

class LaravelRequest extends HttpRequest
{
    use TypedMethods;
}
