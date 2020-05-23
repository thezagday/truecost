<?php

namespace App\Services;

class Logger
{
    public function log(string $message)
    {
        file_put_contents(
            'C:\xampp\htdocs\truecost\logs.txt',
            $message . " \n",
            FILE_APPEND
        );
    }
}