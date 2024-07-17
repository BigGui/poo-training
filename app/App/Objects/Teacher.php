<?php

namespace App\Objects;


class Teacher extends Person
{

    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname## et j\'enseigne à l\'école ##school## les matières suivantes : ##showDisciplines##.';

    protected array $discipline;


    /**
     * Create a new teacher
     *
     * @param string $firstname
     * @param string $lastname
     * @param array $discipline
     * @param School $school
     */
    public function __construct(string $firstname, string $lastname, array $discipline = [], ?School $school = null)
    {
        parent::initialize($firstname, $lastname, $school);

        $this->discipline = $discipline;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------


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


    // -------------------
    // INSTANCE METHODS
    // -------------------

    /**
     * Add a discipline to a teacher.
     *
     * @param string $newDiscipline - The name of new discipline.
     * @return void
     */
    public function addDiscipline(string $newDiscipline): void
    {
        $this->discipline[] = $newDiscipline;
    }

    /**
     * Delete an existing discilpline from a teacher or false.
     *
     * @param string $discipline - The discipline to delete
     * @return void
     */
    public function deleteDiscipline(string $discipline): void
    {
        $key = array_search($discipline, $this->discipline);
        if ($key !== false) {
            unset($this->discipline[$key]);
        }
    }

    /**
     * Get a string of disciplines separated by a coma.
     *
     * @return string 
     */
    public function showDisciplines(): string
    {
        return implode(", ", $this->discipline);
    }
}
