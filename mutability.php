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

    public function increment()
    {
        return new self($this->age +1);
    }

    public function get()
    {
        return $this->age;
    }
}

$age = new Age(35);

$age->increment();

var_dump($age->get());

//function register(string $name, Age $age)
//{
//}

//$age = new Age(36);
//
//register('John Dow', $age);