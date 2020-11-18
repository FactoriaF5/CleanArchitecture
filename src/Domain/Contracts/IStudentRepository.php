<?php


namespace App\Domain\Contracts;


use App\Domain\Models\Student;

interface IStudentRepository
{
    public function save(Student $student);
}
