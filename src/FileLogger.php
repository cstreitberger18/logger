<?php
namespace Cstreitberger18\Logger;
use Cstreitberger18\Logger\ILogger;

class FileLogger implements ILogger
{

    private $handele = null;

    public function __construct(string $filename)
    {
        $this->handele = fopen($filename,'a');
    }

    public function logEntry(string $line): void
    {
        fwrite($this->handele,$line . '\n');
    }

    public function __destruct()
    {
        fclose($this->handele);
    }
}