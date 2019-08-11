<?php

class ApiController
{
    protected $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new ResponseJson();
    }

    public function listen()
    {
        if ($this->request->isMethod('POST')) {
            $this->postMehod();
        }

        if ($this->request->isMethod('GET')) {
            $this->getMehod();
        }

        return $this->response;
    }

    public function postMehod()
    {
        $this->response->add("method", 'POST');

        $this->response->success();
    }

    public function getMehod()
    {
        $this->response->add("method", 'GET');
    }

}