<?php

namespace App\Objects;

use DateTime;

class Student extends Person
{

    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##level##';

    protected DateTime $birthDate;
    protected string $level;


    /**
     * Create a new student
     *
     * @param string $lastname
     * @param string $firstname
     * @param DateTime $birthDate
     * @param string $level
     * @param string $school
     */
    public function __construct(string $lastname, string $firstname, DateTime $birthDate, string $level, string $school)
    {
        parent::__construct($firstname, $lastname, $school);
        $this->birthDate = $birthDate;
        $this->level = $level;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------


    /**
     * Set the level name
     *
     * @param string $level
     * @return void
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * Get the level name
     *
     * @return string
     */
    public function getLevel(): string
    {
        return $this->level;
    }


    /**
     * Get the value of birthdate
     * @return DateTime a birthdate
     */
    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate.
     * 
     * @param DateTime $birthDate a birthdate.
     * @return  void
     */
    public function setBirthDate(DateTime $birthDate): void
    {

        $this->birthDate = $birthDate;
    }


    // -------------------
    // INSTANCE METHODS
    // -------------------

    /**
     * Get my age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->birthDate->diff(new DateTime())->y;
    }

    /**
     * Introduce my self with a sentence.
     *
     * @return string
     */
    // public function introduceMySelf(): string
    // {
    //     return parent::introduceMySelf()
    //         . ' , j\'ai ' . $this->getAge() . ' ans et je vais à l\'école ' . $this->getSchool() . ' en class de ' . $this->getLevel() . '.';
    // }
}
