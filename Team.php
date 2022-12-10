<?php

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name    = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }

    public function cancel()
    {

    }

    public function manager()
    {

    }
}

$acme = Team::start('Acme', [
    'John',
    'Alex'
]);

$acme->add('Joe');

var_dump($acme->members());