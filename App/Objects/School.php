<?php

namespace App\Objects;

abstract class School
{
    protected static array $grades = [];

    public static function getGrades(): array
    {
        return static::$grades;
    }

    protected static function setGrades(array $grades): void
    {
        static::$grades = $grades;
    }

    protected string $name;
    protected string $city;


    public function __construct(string $name, string $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Undocumented function
     *
     * @param string $grade
     * @return boolean
     */
    public function hasGrade(string $grade): bool
    {
        return in_array($grade, static::$grades);
    }
}
