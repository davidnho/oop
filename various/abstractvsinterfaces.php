<?php

//http://www.supertom.com/code/php_abstracts_and_interfaces.html

// No company just has "employees", all employees have a particular function or belong to a group.
// So, we don't want employee to be a concrete (one that can be instantiated) class.  Lets create an abstract.

abstract class Employee
{
    protected $employeeID='';
    protected $annualSalary=NULL;
    abstract protected function setEmployeeID();
    abstract protected function setAnnualSalary();

    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    public function getAnnualSalary()
    {
        return $this->annualSalaryID;
    }

}

//Now lets define some interfaces based on the description above
//canHackTheSystem and canTakeLongVacations are the adjectives
//they can be used to group employees in a manner that is different then just their job

interface canHackTheSystem
{
    public function getSecurityClearance();
}

interface canTakeLongVacations
{
    public function getHRApproval();
}


// and now, finally our classes.  Notice the implements keyword to use interfaces

class Engineer extends Employee implements canHackTheSystem
{
    protected function setEmployeeID()
    {
        //read from db, etc.
    }
    protected function setAnnualSalary()
    {
        //beg HR for a raise
    }
    //required by the interface 'canHackTheSystem'
    public function getSecurityClearance()
    {
        //of course, they have all access
    }
}

class Executive extends Employee implements canTakeLongVacations
{
    protected function setEmployeeID()
    {
        //read from super-special db, etc.
    }
    protected function setAnnualSalary()
    {
        //definitely a large number
    }
    //required by the interface 'canTakeLongVacations'
    public function getHRApproval()
    {
        //all those bribes and gifts paid off
    }
}

//instantiate
$engineer = new Engineer;
$executive = new Executive;

//ok, with these defined and instantiated, we can do cool stuff like this
//a more applicable example might be if the object was instantiated via a Factory
//but hopefully you get the idea.

if ($executive instanceof canTakeLongVacations) {
    // schedule meetings during the winter months
}

if ($engineer instanceof canHackTheSystem) {
    // don't fire this person, they hold the keys to the kingdom
}
?>