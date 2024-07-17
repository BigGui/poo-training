<?php

namespace App\View;

class View
{
    protected static string $path = '';

    /**
     * Get the value of path
     */
    public static function getPath(): string
    {
        return static::$path;
    }

    /**
     * Set the value of path
     *
     * @return  View
     */
    public static function setPath(string $path): void
    {
        static::$path = $path;
    }



    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------


    /**
     * Get the value of data
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  View
     */
    public function setData(array $data): View
    {
        $this->data = $data;

        return $this;
    }

    // -------------------
    // INSTANCE METHODS
    // -------------------

    public function getTemplateContent(): string
    {
        if (!file_exists(static::$path)) return '';

        return file_get_contents(static::$path);
    }

    public function fillTemplateWithData(): string
    {
        return preg_replace_callback(
            '/{{(\w+)}}/',
            fn($m) => isset($this->data[$m[1]]) ? $this->data[$m[1]] : '',
            $this->getTemplateContent()
        );
    }

    public function show(): void
    {
        echo $this->fillTemplateWithData();
    }
}
