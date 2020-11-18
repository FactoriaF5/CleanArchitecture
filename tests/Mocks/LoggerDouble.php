<?php


namespace Tests\Mocks;

use App\Domain\Contracts\ILog;

class LoggerDouble implements ILog
{
    public function log($data)
    {
    }
}
