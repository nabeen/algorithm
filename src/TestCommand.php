<?php
namespace nabeen\algorithm;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class TestCommand
{
    public function __construct()
    {
        $this->log = new Logger('app');
        $this->log->pushHandler(new StreamHandler(__DIR__.'../../logs/app.log', Logger::DEBUG));
    }

    public function run ($argv)
    {
        $this->log->addInfo('Info Message');
        $this->log->addError('Error Message');
        $this->log->addDebug('Debug Message');
        echo "excuted TestCommand. And logging by monolog/monolog";
    }
}
