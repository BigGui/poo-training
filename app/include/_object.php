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

    /**
     * set first name
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }
    /**
     * get the first name
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    /**
     * set last name
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }
    /**
     * get the last name
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
    /**
     * set the age
     *
     * @param int $age
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    /**
     * get the age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    /**
     * set the level
     *
     * @param string $level
     * @return void
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }
    /**
     * get the level
     *
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }
}
