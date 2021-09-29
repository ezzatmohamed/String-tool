<?php

require_once __DIR__.'/FileHandler.php';

class CsvHandler extends FileHandler {


    public function write($data)
    {
        fputcsv($this->file, $data);   
    }

}