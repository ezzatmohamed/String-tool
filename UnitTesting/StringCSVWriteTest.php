<?php

require_once  __DIR__ . '/../Operations/StringOperations/StringCSVWrite.php';
require_once  __DIR__ . '/../FileHandler/CsvHandler.php';

class StringCSVWriteTest extends \PHPUnit\Framework\TestCase {


    public function testFileCreatedInRootDirectory()
    {
        $text = 'hello world';

        $csv_handler = new CsvHandler();
        $string_capitalizer = new StringCSVWrite($text, $csv_handler);
        $string_capitalizer->execute();

        $this->assertFileExists('/str_to_csv.csv'); 
    }


    public function testFileContents()
    {
        $text = 'hello world';

        $csv_handler = new CsvHandler();
        $string_capitalizer = new StringCSVWrite($text, $csv_handler);
        $string_capitalizer->execute();

        $file_contents = file_get_contents('/str_to_csv.csv');
        $this->assertStringContainsString('h,e,l,l,o," ",w,o,r,l,d', $file_contents); 
    }

    public function testOutputText()
    {
        $text = 'hello world';

        $csv_handler = new CsvHandler();
        $string_capitalizer = new StringCSVWrite($text, $csv_handler);
        $string_capitalizer->execute();
        $this->expectOutputString('CSV created!'. PHP_EOL);
    }

}
