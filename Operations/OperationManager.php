<?php
require_once __DIR__ . '/OperationInterface.php';

/**
 * Operation manager that handles a list of operations
 */
class OperationManager
{
    protected array $operations_list;

    public function __construct()
    {
        $this->operations_list = [];
    }

    /**
     * add a new operation to the manager
     *
     * @param OperationInterface $operation
     * @return void
     */
    public function addOperation(OperationInterface $operation)
    {
        array_push($this->operations_list, $operation);
    }

    /**
     * Execute each operation in the list
     *
     * @return void
     */
    public function executeOperations()
    {
        foreach ($this->operations_list as $operation)
            $operation->execute();
    }
}
