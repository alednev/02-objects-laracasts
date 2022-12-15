<?php

class Age
{
    public $age;

    public function __construct(int $age)
    {
        if ($age < 0 || $age > 120) {
            throw new InvalidArgumentException('That makes no sense');
        }

        $this->age = $age;
    }
}

function register(string $name, Age $age)
{
}

$age = new Age(36);

register('John Dow', $age);