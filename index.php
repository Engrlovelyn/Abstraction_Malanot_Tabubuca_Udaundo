<?php
$fullTimeEmp = new FullTimeEmployee("klein", 1001, "secretary", 500,000);
$partTimeEmp = new PartTimeEmployee("Jane Smith", 2002, "Assistant", 200, 40);

echo "Name: {$fullTimeEmp->getName()}, ID: {$fullTimeEmp->getId()}, Position: {$fullTimeEmp->getDepartment()}, Salary: PHP {$fullTimeEmp->calculateSalary()}, Health Insurance: {$fullTimeEmp->getHealthInsurance()}, Leave Credits: {$fullTimeEmp->getLeaveCredits()}<br>\n";
echo "Name: {$partTimeEmp->getName()}, ID: {$partTimeEmp->getId()}, Position: {$partTimeEmp->getDepartment()}, Salary: PHP {$partTimeEmp->calculateSalary()}, Health Insurance: {$partTimeEmp->getHealthInsurance()}, Leave Credits: {$partTimeEmp->getLeaveCredits()}<br>\n";
?>
