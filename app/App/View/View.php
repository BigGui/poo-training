<?php

namespace App\View;

class View
{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

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
}
