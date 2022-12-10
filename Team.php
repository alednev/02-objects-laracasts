<?php

class Team
{
    protected string $name;
    protected array $members = [];

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

class Member
{
    protected string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function lastViewed()
    {

    }
}

$acme = Team::start('Acme', [
    new Member('John'),
    new Member('Alex'),
]);

var_dump($acme->members());