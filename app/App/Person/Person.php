<?php

namespace App\Person;

use App\School\School;

abstract class Person
{

    protected static string $sentence = 'Bonjour, je m\'appelle ##lastname## ##firstname##';

    protected string $firstname;
    protected string $lastname;
    protected ?School $school;

    /**
     * Create a new student
     *
     * @param string $lastname
     * @param string $firstname
     * @param ?School $school
     */
    protected function initialize(
        string $lastname,
        string $firstname,
        ?School $school = null
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
    public function getSchool(): ?School
    {
        return $this->school;
    }

    /**
     * Set the value of school
     *
     * @return  Person
     */
    public function setSchool(?School $school): Person
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
        return preg_replace_callback(
            '/##(\w+)##/',
            fn($m) => $this->getValueFromKey($m[1]),
            static::$sentence
        );

        // Looking for keys to replace in the sentence
        // preg_match_all('/##(\w+)##/', static::$sentence, $match);

        // Get a value for each key matching a property or method name
        // $values = array_map([$this, 'getValueFromKey'], $match[1]);
        // $values = [];
        // foreach ($match[1] as $key) {
        //     $values[] = $this->getValueFromKey($key);
        // }

        // Replace each key in the sentence with its value
        // return str_replace($match[0], $values, static::$sentence);
    }

    /**
     * Get a value from a property or method name
     *
     * @param string $key - Property or method name
     * @return string - value from property or method
     */
    private function getValueFromKey(string $key): string
    {
        if (property_exists($this, $key)) return $this->$key;
        
        if (method_exists($this, $key)) return $this->$key();

        return '';
    }
}