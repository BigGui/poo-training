<?php

namespace App\View;

class View
{
    private string $path;
    private array $data;

    public function __construct(string $path, array $data)
    {
        $this->path = $path;
        $this->data = $data;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * Get the value of path
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set the value of path
     *
     * @return  View
     */
    public function setPath(string $path): View
    {
        $this->path = $path;

        return $this;
    }

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
        if (!file_exists($this->path)) return '';

        return file_get_contents($this->path);
    }

    public function show(): void
    {
        echo $this->getTemplateContent();
    }
}
