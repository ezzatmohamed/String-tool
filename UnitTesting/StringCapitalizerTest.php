<?php

require_once  __DIR__ . '/../Operations/StringOperations/StringCapitalizer.php';


class StringCapitalizerTest extends \PHPUnit\Framework\TestCase {


    public function testCapitalizeString()
    {
        $text = 'hello world';
        $string_capitalizer = new StringCapitalizer($text);
        $string_capitalizer->execute();

        $this->assertEquals("HELLO WORLD", $string_capitalizer->getText());
    }


    public function testAlternateCapitalizeStringWithCapitalizedText()
    {
        $text = 'heLLo WORld';
        $string_capitalizer = new StringCapitalizer($text);
        $string_capitalizer->execute();

        $this->assertEquals("HELLO WORLD", $string_capitalizer->getText());
    }

    public function testOutputText()
    {
        $text = 'heLLo WORld';
        $string_capitalizer = new StringCapitalizer($text);
        $string_capitalizer->execute();
        $this->expectOutputString("HELLO WORLD" . PHP_EOL);
    }
}