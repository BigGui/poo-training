<?php

namespace App\Objects;

class Teacher extends Person
{

    protected static string $intro = 'Bonjour, je m\'appelle ##firstname## ##lastname## et j\'enseigne à l\'école ##school## les matières suivantes : ##subjects##."';

    private array $subjects;

    public function __construct(string $firstname, string $lastname, array $subjects = [], string $school = '')
    {
        parent::__construct($firstname, $lastname, $school);
        $this->subjects = $subjects;
    }


    public function getSubjects(): array
    {
        return $this->subjects;
    }

    public function setSubjects(array $subjects): void
    {
        $this->subjects = $subjects;
    }

    /**
     * Add a subject into the subjects list.
     *
     * @param string $subject
     * @return void
     */
    public function addSubject(string $subject): void
    {
        $this->subjects[] = $subject;
    }

    /**
     * Remove subject from subjects list.
     *
     * @param string $subject
     * @return void
     */
    public function removeSubject(string $subject): void
    {
        $index = array_search($subject, $this->subjects);
        if ($index !== false) unset($this->subjects[$index]);
    }

    /**
     * Give the subjects list in text
     *
     * @return string
     */
    public function displaySubjects(): string
    {
        return implode(', ', $this->subjects);
    }

    public function introduce(): string
    {
        //     return parent::introduce() . " et j'enseigne à l'école {$this->school} les matières suivantes : {$this->displaySubjects()}.";
        return self::getIntroduction([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'school' => $this->school,
            'subjects' => $this->displaySubjects()
        ]);
    }
}
