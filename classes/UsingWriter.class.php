<?php
interface IWriter
{
    public function write($text);
}

class Writer
{
    public function write ($text)
    {
        return "write $text";
    }
}

class UsingWriter
{
    private $_writer;

    public function setIWriter(IWriter $writer)
    {
        $this->_writer = $writer;
    }

    public function setWriter(Writer $writer)
    {
        $this->_writer = $writer;
    }

    public function setFreeWriter ($writer)
    {
        $this->_writer = $writer;
    }

    public function write($text)
    {
        $this->_writer->write($text);
    }
}