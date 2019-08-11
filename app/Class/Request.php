<?php

class Request
{
    protected $request;

    public function __construct()
    {
        $this->request = $_REQUEST;
    }

    public function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function isMethod($method)
    {
        return $_SERVER['REQUEST_METHOD'] === $method;
    }

    public function getVar($name, $def = "")
    {
        return $this->request[$name] ?? $def;
    }

    public function getInt($name, $def = 0)
    {
        return (int) $this->request[$name] ?? $def;
    }
}