<?php

namespace CodePhix\Asaas;


class Conta {

    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }


    public function get(){
        return $this->http->get('/accounts/');
    }

    public function create(array $params = []){
        return $this->http->post('/accounts/', $params);
    }

}
