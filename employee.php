<?php
abstract class Employee {
    protected $name;
    protected $id;
    protected $position;
    
    public function __construct($name, $id, $position) {
        $this->name = $name;
        $this->id = $id;
        $this->position = $position;
    }
    
    abstract public function calculateSalary();
}
?>
