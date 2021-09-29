<?php
require_once __DIR__ . '/CommandParser.php';
require_once __DIR__ . '/Operations/StringOperations/StringAlternateCapitalizer.php';
require_once __DIR__ . '/Operations/OperationManager.php';
require_once __DIR__ . '/Operations/StringOperations/StringCapitalizer.php';
require_once __DIR__ . '/Operations/StringOperations/StringCSVWrite.php';
require_once __DIR__ . '/FileHandler/CsvHandler.php';

// passing the terminal arguments to command parser
$command_parser = new CommandParser($argv);
// Getting the arguments as a string
$full_string = $command_parser->getArgsAsFullString();


// Creating objects from string operations
$string_capitalizer = new StringCapitalizer($full_string);
$string_alternate_capitalizer = new StringAlternateCapitalizer($full_string);
$csv_handler = new CsvHandler();
$string_csv_write = new StringCSVWrite($full_string, $csv_handler);

// Creating the manager that will handle the operations
$operation_manager = new OperationManager();


// Adding operations to the manager
$operation_manager->addOperation($string_capitalizer);
$operation_manager->addOperation($string_alternate_capitalizer);
$operation_manager->addOperation($string_csv_write);

// Execute the operations
$operation_manager->executeOperations();