<?php

require_once __DIR__ . '/../OperationInterface.php';

/**
 * abstract class for any operation that handles execute operation on a string
 */
abstract class StringOperation implements OperationInterface
{

    protected string $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
    
    /**
     * children define how to execute the operation
     *
     * @return void
     */
    abstract public function execute() : void;
}
