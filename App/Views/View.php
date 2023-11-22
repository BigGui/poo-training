<?php

namespace App\Views;

abstract class View
{
    protected static string $file = '';
    private array $data = [];

    public function __construct($data) 
    {
        $this->data = $data;
    }

    public function readContent():string {
        $text = file_get_contents(static::$file);

        return str_replace(
            array_map(fn ($t) => "##$t##", array_keys($this->data)),
            array_values($this->data),
            $text
        );
    }
}
