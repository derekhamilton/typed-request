<?php
namespace DerekHamilton\TypedRequest;

class GlobalRequest
{
    use TypedMethods;

    private function server(string $key, $default = null)
    {
        return $_SERVER[$key] ?? $default;
    }

    private function header(string $key, $default = null)
    {
        return getallheaders()[$key] ?? $default;
    }

    private function query(string $key, $default = null)
    {
        return $_GET[$key] ?? $default;
    }

    private function input(string $key, $default = null)
    {
        return $_REQUEST[$key] ?? $default;
    }

    private function cookie(string $key, $default = null)
    {
        return $_COOKIE[$key] ?? $default;
    }
}
