<?php
require_once 'Employee.php';
require_once 'Benefits.php';

class PartTimeEmployee extends Employee implements Benefits {
    private $hourlyRate;
    private $hoursWorked;
    
    public function __construct($name, $id, $position, $hourlyRate, $hoursWorked) {
        parent::__construct($name, $id, $position);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }
    
    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }
    
    public function getHealthInsurance() {
        return "No health insurance benefits.";
    }
    
    public function getLeaveCredits() {
        return "5 unpaid leave credits per year.";
    }
}
?>
