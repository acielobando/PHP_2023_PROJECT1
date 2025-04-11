<?php

class Employee{


    public $id;
    public $name;
    public $WorkH = 8;
    public $hourlyRate = 15;
    public $totalLT;
    public $days;

    function GetSalary($totaldays) : int{
        // $this is a special variable which can be used to access class properthis.

        $this->days = $totaldays - $this->totalLT;
        $salary = $this->days * $this->WorkH * $this->hourlyRate;
        return $salary;
    }



}


$emp1 = new Employee();
$emp1->id =101;
$emp1->name = "Santiago Gonzalez";
$emp1->totalLT =4;
$salary = $emp1->GetSalary(20);

echo "$emp1->name has worked for $emp1->days days and taken $emp1->totalLT ".PHP_EOL;
echo "$emp1->name salary is $salary";

