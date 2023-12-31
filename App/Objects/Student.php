<?php

namespace App\Objects;

use DateTime;

class Student extends Person
{

    // STATIC

    protected static string $intro = 'Bonjour, je m\'appelle ##firstname## ##lastname##, j\'ai ##age## ans et je vais à l\'école ##school## en classe de ##grade##.';

    /**
     * @var DateTime
     */
    private DateTime $birthdate;

    /**
     * @var string
     */
    private string $grade;

    public function __construct(string $firstname, string $lastname, DateTime $birthdate, string $grade, School $school)
    {
        parent::__construct($firstname, $lastname, $school);
        $this->birthdate = $birthdate;
        $this->grade = $grade;
    }

    // -------------------
    // GETTERS & SETTERS
    // -------------------


    public function getBirthdate(): DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getGrade(): string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): void
    {
        if (!$this->school->hasGrade($grade)) return;
        
        $this->grade = $grade;
    }


    // ----------------
    // METHODS
    // ----------------

    /**
     * Give the student age
     *
     * @return integer
     */
    public function getAge(): int
    {
        return $this->birthdate->diff(new DateTime)->y;
    }

    public function introduce(): string
    {
        //     return parent::introduce() . ", j'ai {$this->getAge()} ans et je vais à l'école {$this->school} en classe de {$this->grade}.";

        return $this->getIntroduction([
            'age' => $this->getAge()
        ]);
    }
}
