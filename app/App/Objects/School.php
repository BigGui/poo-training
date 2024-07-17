<?php

namespace App\Objects;

abstract class School
{
    public static array $level = [];

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

    /**
     * Checks if a school support a level.
     *
     * @param string $searchedLevel The level searched
     * @return boolean
     */
    public function isSupportedLevel(string $searchedLevel): bool
    {
        return in_array($searchedLevel, static::$level);
    }
}
