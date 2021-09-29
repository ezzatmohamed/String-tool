<?php

require_once  __DIR__ . '/StringOperation.php';

require_once __DIR__ . '/../../FileHandler/FileHandler.php';

class StringCSVWrite extends StringOperation
{

    private $csv_handler;

    public function __construct($full_string, FileHandler $csv_handler)
    {
        parent::__construct($full_string);
        $this->csv_handler = $csv_handler;
    }

    public function execute(): void
    {
        $characters = str_split($this->text);
        
        $this->csv_handler
            ->openFile('/str_to_csv.csv')
            ->write($characters);
        echo "CSV created!" . PHP_EOL;
    }
}
