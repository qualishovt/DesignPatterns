<?php

use DesignPatterns\Behavioral\Visitor\Component\Company;
use DesignPatterns\Behavioral\Visitor\Component\Department;
use DesignPatterns\Behavioral\Visitor\Component\Employee;
use DesignPatterns\Behavioral\Visitor\Visitor\SalaryReport;

require_once '../../vendor/autoload.php';

/**
 * The client code.
 */

$mobileDev = new Department("Mobile Development", [
    new Employee("Albert Falmore", "designer", 100000),
    new Employee("Ali Halabay", "programmer", 100000),
    new Employee("Sarah Konor", "programmer", 90000),
    new Employee("Monica Ronaldino", "QA engineer", 31000),
    new Employee("James Smith", "QA engineer", 30000),
]);
$techSupport = new Department("Tech Support", [
    new Employee("Larry Ulbrecht", "supervisor", 70000),
    new Employee("Elton Pale", "operator", 30000),
    new Employee("Rajeet Kumar", "operator", 30000),
    new Employee("John Burnovsky", "operator", 34000),
    new Employee("Sergey Korolev", "operator", 35000),
]);
$company = new Company("SuperStarDevelopment", [$mobileDev, $techSupport]);

setlocale(LC_MONETARY, 'en_US');
$report = new SalaryReport();

echo "Client: I can print a report for a whole company:\n<br>\n<br>";
echo $company->accept($report);

echo "\n<br>Client: ...or for different entities " .
    "such as an employee, a department, or the whole company:\n<br>\n<br>";
$someEmployee = new Employee("Some employee", "operator", 35000);
$differentEntities = [$someEmployee, $techSupport, $company];
foreach ($differentEntities as $entity) {
    echo $entity->accept($report) . "\r\n<br>";
}

// $export = new JSONExport(); 
// echo $company->accept($export);