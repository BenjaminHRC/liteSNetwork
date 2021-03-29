<?php

class ConnectionClass
{
    // déclaration d'une propriété
    public $server = 'localhost';
    public $port = '3306';
    public $database = 'firstsocialreseau';
    public $login = 'root';
    public $password = '';

    // déclaration des méthodes
    public function connect()
    {
        return new PDO("mysql:host=$this->server;dbname=$this->database;charset=utf8", "$this->login", "$this->password");
    }
}