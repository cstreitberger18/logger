<?php
namespace Cstreitberger18\Logger;

interface ILogger
{
    public function logEntry(string $line): void;

}