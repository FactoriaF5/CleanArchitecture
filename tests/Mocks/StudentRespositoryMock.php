<?php


namespace Tests\Mocks;


use App\Domain\Contracts\IStudentRepository;
use App\Domain\Models\Student;

class StudentRespositoryMock implements IStudentRepository
{

    public function save(Student $student)
    {
        return $student;
    }
}
