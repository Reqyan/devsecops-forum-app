<?php
 
namespace App\Exceptions;
 
use Exception;
 
class RuntimeException extends Exception
{
    public function report()
    {
        return false;
    }
}