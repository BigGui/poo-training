<?php

class Student
{
    private string $lastname;
    private string $firstname;
    private DateTime $birthDate;
    private string $level;
    private string $school;

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
     * Set firstname
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }


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
     * Set the school name
     *
     * @param string $school
     * @return void
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    /**
     * Get the school name
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
    public function introduceMySelf(): string
    {
        return 'Bonjour, je m\'appelle ' . $this->getLastname() . ' ' . $this->getFirstname() . ' , j\'ai ' . $this->getAge() . ' ans et je vais à l\'école ' . $this->getSchool() . ' en class de ' . $this->getLevel() . '.';
    }
}


class Teacher
{
    private string $firstname;
    private string $lastname;
    private array $discipline;
    private string $school;

    /**
     * Create a new teacher
     *
     * @param string $firstname
     * @param string $lastname
     * @param array $discipline
     * @param string $school
     */
    public function __construct(string $firstname, string $lastname, array $discipline = [], string $school = '')
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->discipline = $discipline;
        $this->school = $school;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * Get the value of firstname
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname(string $firstname): Teacher
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname(string $lastname): Teacher
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of discipline
     */
    public function getDiscipline(): array
    {
        return $this->discipline;
    }

    /**
     * Set the value of discipline
     *
     * @return  self
     */
    public function setDiscipline(array $discipline): Teacher
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get the value of school
     */
    public function getSchool(): string
    {
        return $this->school;
    }

    /**
     * Set the value of school
     *
     * @return  self
     */
    public function setSchool(string $school): Teacher
    {
        $this->school = $school;

        return $this;
    }


    // -------------------
    // INSTANCE METHODS
    // -------------------

    public function addDiscipline(string $newDiscipline) {
        $this->discipline[] = $newDiscipline;
    }

    public function deleteDiscipline(string $discipline) {
        $key = array_search($discipline, $this->discipline);
        if($key !== false) {
            unset($this->discipline[$key]);
        }
    }
}
