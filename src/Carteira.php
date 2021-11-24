<?php

namespace CodePhix\Asaas;


class Carteira {

    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }

    public function get(){
        return $this->http->get('/wallets/');
    }

}
