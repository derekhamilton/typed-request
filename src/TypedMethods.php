<?php
namespace DerekHamilton\TypedRequest;

trait TypedMethods
{
    public function serverInt(string $key, $default = null): ?int
    {
        $value = $this->server($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (int)$value;
    }

    public function serverString(string $key, $default = null): ?string
    {
        $value = $this->server($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (string)$value;
    }

    public function serverArray(string $key, $default = null): array
    {
        $value = $this->server($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? $value : [];
    }

    public function headerInt(string $key, $default = null): ?int
    {
        $value = $this->header($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (int)$value;
    }

    public function headerString(string $key, $default = null): ?string
    {
        $value = $this->header($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (string)$value;
    }

    public function headerArray(string $key, $default = null): array
    {
        $value = $this->header($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? $value : [];
    }

    public function queryInt(string $key, $default = null): ?int
    {
        $value = $this->query($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (int)$value;
    }

    public function queryString(string $key, $default = null): ?string
    {
        $value = $this->query($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (string)$value;
    }

    public function queryArray(string $key, $default = null): array
    {
        $value = $this->query($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? $value : [];
    }

    public function postInt(string $key, $default = null): ?int
    {
        $value = $this->post($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (int)$value;
    }

    public function postString(string $key, $default = null): ?string
    {
        $value = $this->post($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (string)$value;
    }

    public function postArray(string $key, $default = null): array
    {
        $value = $this->post($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? $value : [];
    }

    public function inputInt(string $key, $default = null): ?int
    {
        $value = $this->input($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (int)$value;
    }

    public function inputString(string $key, $default = null): ?string
    {
        $value = $this->input($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (string)$value;
    }

    public function inputArray(string $key, $default = null): array
    {
        $value = $this->input($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? $value : [];
    }

    public function cookieInt(string $key, $default = null): ?int
    {
        $value = $this->cookie($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (int)$value;
    }

    public function cookieString(string $key, $default = null): ?string
    {
        $value = $this->cookie($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? null : (string)$value;
    }

    public function cookieArray(string $key, $default = null): array
    {
        $value = $this->cookie($key, $default);

        if (!$value === $default) {
            return $value;
        }

        return is_array($value) ? $value : [];
    }
}
