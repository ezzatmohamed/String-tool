<?php

require_once  __DIR__ . '/../Operations/StringOperations/StringAlternateCapitalizer.php';


class StringAlternateCapitalizerTest extends \PHPUnit\Framework\TestCase {

    
    public function testAlternateCapitalizeString()
    {
        $text = 'hello world';
        $string_capitalizer = new StringAlternateCapitalizer($text);
        $string_capitalizer->execute();

        $this->assertEquals("hElLo wOrLd", $string_capitalizer->getText());
    }

    public function testAlternateCapitalizeStringWithCapitalizedText()
    {
        $text = 'heLLo WORld';
        $string_capitalizer = new StringAlternateCapitalizer($text);
        $string_capitalizer->execute();

        $this->assertEquals("hElLo wOrLd", $string_capitalizer->getText());
    }


    public function testOutputText()
    {
        $text = 'heLLo WORld';
        $string_capitalizer = new StringAlternateCapitalizer($text);
        $string_capitalizer->execute();
        $this->expectOutputString("hElLo wOrLd" . PHP_EOL);
    }
}