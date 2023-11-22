<?php

namespace App\Objects;

class Person
{

    // STATIC

    protected static string $intro = 'Bonjour, je m\'appelle ##firstname## ##lastname##';

    protected static function getIntroduction(array $data): string
    {
        return str_replace(
            array_map(fn ($t) => "##$t##", array_keys($data)),
            array_values($data),
            static::$intro
        );
    }
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

    public function introduce(): string
    {
        // return "Bonjour, je m'appelle {$this->firstname} {$this->lastname}";

        return self::getIntroduction([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname
        ]);
    }
}
