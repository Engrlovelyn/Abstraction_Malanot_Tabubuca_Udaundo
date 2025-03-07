<?php
require_once 'Employee.php';
require_once 'Benefits.php';

class FullTimeEmployee extends Employee implements Benefits {
    private $monthlySalary;
    
    public function __construct($name, $id, $position, $monthlySalary) {
        parent::__construct($name, $id, $position);
        $this->monthlySalary = $monthlySalary;
    }
    
    public function calculateSalary() {
        return $this->monthlySalary;
    }
    
    public function getHealthInsurance() {
        return "Full coverage health insurance.";
    }
    
    public function getLeaveCredits() {
        return "15 paid leave credits per year.";
    }
}

?>
