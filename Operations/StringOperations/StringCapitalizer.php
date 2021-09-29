<?php

require_once  __DIR__ . '/StringOperation.php';


class StringCapitalizer extends StringOperation
{

    public function execute(): void
    {
        $this->text = strtoupper($this->text);
        echo $this->text  . PHP_EOL;
    }
}
