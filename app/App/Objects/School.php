<?php

namespace App\Objects;

class School
{
    protected string $name;
    protected string $city;

    public function __construct(string $n, string $c)
    {
        $this->name = $n;
        $this->city = $c;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  School
     */
    public function setName(string $name): School
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  School
     */
    public function setCity(string $city): School
    {
        $this->city = $city;

        return $this;
    }

    // -------------------
    // INSTANCE METHODS
    // -------------------
}
