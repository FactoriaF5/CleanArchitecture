<?php


namespace App\Domain\Application;


use App\Domain\Contracts\IStudentRepository;
use App\Domain\Models\Student;
use App\Domain\Contracts\ILog;

class CreateNewStudent
{
    private IStudentRepository $repository;
    private ILog $logger;

    public function __construct(IStudentRepository $repository, ILog $logger)
    {
        $this->repository = $repository;
        $this->logger = $logger;
    }

    public function execute($data)
    {

        $newStudent = new Student($data);
        $studentToReturn = $this->repository->save($newStudent);
        $this->logger->log($studentToReturn);
        return $studentToReturn;
    }
}
