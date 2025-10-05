<?php

namespace DesignPatterns\Behavioral\Visitor\Visitor;

use DesignPatterns\Behavioral\Visitor\Component\Company;
use DesignPatterns\Behavioral\Visitor\Component\Department;
use DesignPatterns\Behavioral\Visitor\Component\Employee;

/**
 * The Visitor interface declares a set of visiting methods for each of the
 * Concrete Component classes.
 */
interface Visitor
{
    public function visitCompany(Company $company): string;

    public function visitDepartment(Department $department): string;

    public function visitEmployee(Employee $employee): string;
}
