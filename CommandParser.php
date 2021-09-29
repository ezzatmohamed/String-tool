<?php


class CommandParser
{

    protected $args;

    public function __construct($args)
    {
        $this->args = $args;
        $this->validate();
    }

    protected function validate()
    {
        $num_of_args = count($this->args);
        if ($num_of_args < 2) {
            return throw new Exception("Arguments must be greater than 1");
        }
        
    }

    public function getArgsAsFullString()
    {
        $valid_args = array_slice($this->args, 1);
        $full_string = implode(' ', $valid_args);
        return $full_string;
    }
}
