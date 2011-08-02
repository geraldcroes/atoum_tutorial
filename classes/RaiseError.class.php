<?php
class RaiseError
{
    public function raise ()
    {
        trigger_error('This is an error', E_USER_WARNING);
    }
}