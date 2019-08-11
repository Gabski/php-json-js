<?php
class ResponseJson
{
    public function __construct($data = [])
    {
        $this->data = $data;
        $this->data['success'] = false;
    }

    public function add($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function success()
    {
        $this->data['success'] = true;
    }

    public function render()
    {
        header('Content-Type: application/json');
        echo json_encode($this->data);
    }

}