<?php

namespace Tests\Domain\Application;

use App\Domain\Application\CreateNewStudent;
use PHPUnit\Framework\TestCase;
use Tests\Mocks\LoggerDouble;
use Tests\Mocks\StudentRespositoryMock;

class CreateNewStudentTest extends TestCase
{
    public function test_can_create_a_student()
    {

        $studentName = "Sergi";
        $repository = new StudentRespositoryMock();
        $logger = new LoggerDouble();


        $createNewStudent = new CreateNewStudent($repository, $logger);

        $result = $createNewStudent->execute($studentName);

        $this->assertEquals("Sergi", $result->getName());
        $this->assertIsString($result->getId());
    }
}
