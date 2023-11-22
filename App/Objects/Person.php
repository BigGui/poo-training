<?php

namespace App\Objects;

class Person
{

    // STATIC

    protected static string $intro = 'Bonjour, je m\'appelle ##firstname## ##lastname##';

    /**
     * @var string
     */
    protected string $firstname;

    /**
     * @var string
     */
    protected string $lastname;

    /**
     * @var string
     */
    protected string $school;


    public function __construct(string $firstname, string $lastname, string $school)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->school = $school;
    }


    // -------------------
    // GETTERS & SETTERS
    // -------------------

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return string
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getSchool(): string
    {
        return $this->school;
    }

    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    protected function getIntroduction(array $data = []): string
    {
        preg_match_all('/##(\w)*##/', static::$intro, $keys);
        $keys = array_map(fn ($w) => trim($w, '#'), $keys[0]);
        foreach ($keys as $key) {
            if (isset($this->{$key})) {
                $data[$key] = $this->{$key};
            }
        }
        return str_replace(
            array_map(fn ($t) => "##$t##", array_keys($data)),
            array_values($data),
            static::$intro
        );
    }

    public function introduce(): string
    {
        // return "Bonjour, je m'appelle {$this->firstname} {$this->lastname}";

        return $this->getIntroduction();
    }
}
