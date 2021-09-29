<?php
require_once __DIR__ . '/StringOperation.php';

class StringAlternateCapitalizer extends StringOperation
{

    public function execute(): void
    {
        $converted_text = "";
        $capitalize_character = false;

        for ($i = 0; $i < strlen($this->text); $i++) {
            $converted_text .= $capitalize_character ? strtoupper($this->text[$i]) : strtolower($this->text[$i]);
            $capitalize_character = !$capitalize_character;
        }
        $this->text = $converted_text;
        echo $this->text  . PHP_EOL;
    }
}
