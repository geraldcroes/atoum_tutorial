<?php
class LaunchedException extends Exception{};

class ExceptionLauncher
{
    public function launchAnException ()
    {
        throw new LaunchedException('Message in the exception');
    }
}