<?php

class Student
{
    private string $lastname;
    private string $firstname;
    private DateTime $birthDate;
    private string $level;
    private string $school;

    /**
     * Constructor
     *
     * @param string $lastname
     * @param string $firstname
     * @param DateTime $birthDate
     * @param string $level
     * @param string $school
     */
    public function __construct(string $lastname, string $firstname, DateTime $birthDate, string $level, string $school)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->birthDate = $birthDate;
        $this->level = $level;
        $this->school = $school;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

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

    /**
     * set the school
     *
     * @param string $school
     * @return void
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    /**
     * get the school
     *
     * @return string
     */
    public function getSchool(): string
    {
        return $this->school;
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
     *@param DateTime $birthDate a birthdate.
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
     * get the age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->birthDate->diff(new DateTime())->y;
    }

    /**
     * get introduce my self
     *
     * @return string
     */
    public function introduceMySelf (): string 
    {
        return 'Bonjour, je m\'appelle ' . $this->getLastname() . ' ' .$this->getFirstname() . ' , j\'ai ' .$this->getAge() . ' ans et je vais à l\'école ' . $this->getSchool() . ' en class de ' .$this->getLevel() . '.';
    }
}
