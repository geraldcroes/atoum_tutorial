<?php
class LaunchedException extends Exception{};

class ExceptionLauncher
{
    public function launchException ()
    {
        throw new LaunchedException('Message in the exception');
    }
}