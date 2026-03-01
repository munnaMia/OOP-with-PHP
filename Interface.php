<?php

// The Handshake (Interface)
interface Logger
{
    public function log($message);
}

// First implementation: File
class FileLogger implements Logger
{
    public function log($message)
    {
        echo "Writing to a .txt file: $message";
    }
}

// Second implementation: Database
class DatabaseLogger implements Logger
{
    public function log($message)
    {
        echo "Inserting into SQL table: $message";
    }
}

// The "App" doesn't care which one it uses, 
// as long as it follows the Logger handshake.
function reportError(Logger $logger)
{
    $logger->log("Something went wrong!");
}

$fileLog = new FileLogger();
reportError($fileLog); // Works!


// same as go interface