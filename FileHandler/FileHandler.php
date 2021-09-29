<?php


abstract class FileHandler {

    public function openFile($file_name, $mode = 'w') : FileHandler
    {
        $this->file = fopen($file_name, $mode);
        return $this;
    }

    abstract public function write($data);
}