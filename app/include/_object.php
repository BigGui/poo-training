<?php

class Student
{
    private string $lastname;
    private string $firstname;
    private int $age;
    private string $level;

    public function __construct(string $lastname, string $firstname, int $age, string $level)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->level = $level;
    }
}
