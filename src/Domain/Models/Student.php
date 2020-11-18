<?php


namespace App\Domain\Models;

use DateTime;

class Student
{
    private string $name;
    private string $id;

    /**
     * Student constructor.
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->id = uniqid();

    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getId() : string {
        return $this->id;
    }

}
