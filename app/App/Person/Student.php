<?php

namespace App\Person;

use DateTime;
use App\School\School;

class Student extends Person
{

    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname##, j\'ai ##getAge## ans et je vais à l\'école ##school## en class de ##level##.';

    protected DateTime $birthDate;
    protected string $level;


    /**
     * Create a new student
     *
     * @param string $lastname
     * @param string $firstname
     * @param DateTime $birthDate
     * @param string $level
     * @param School $school
     */
    public function __construct(string $lastname, string $firstname, DateTime $birthDate, string $level, School $school)
    {
        parent::initialize($firstname, $lastname, $school);
        $this->birthDate = $birthDate;
        $this->setLevel($level);
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------


    /**
     * Set the level name
     *
     * @param string $level
     * @return bool
     */
    public function setLevel(string $level): bool
    {
        if (!$this->school->isSupportedLevel($level)) return false;
        
        $this->level = $level;
        return true;
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
}
