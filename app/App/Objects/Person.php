<?php

namespace App\Objects;

class Person
{

    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname##';

    protected string $firstname;
    protected string $lastname;
    private string $school;

    /**
     * Create a new student
     *
     * @param string $lastname
     * @param string $firstname
     * @param string $school
     */
    public function __construct(
        string $lastname,
        string $firstname,
        string $school
    ) {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
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


    /**
     * Introduce my self with a sentence.
     *
     * @return string
     */
    public function introduceMySelf(): string
    {
        preg_match_all('/##(\w+)##/', static::$sentence, $match);

        $values =[];
        foreach($match[1] as $key) {
            if (isset($this->$key)) {
                $values[] = $this->$key;
            }
        }

        return str_replace($match[0], $values, static::$sentence);
    }
}
