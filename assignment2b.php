<?php
class School 
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;       
    }

}
class Student extends School
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    
    public function getContent()
    {
        echo $this->name . " is a new student. <br>";
        return new Information();
    }
}

class Information
{
    private $gender;
    private $age;

    public function Gender($gender)
    {
        $this->gender = $gender;
        echo " is $this->gender. <br>";
    }

    public function Age($age)
    {
        $this->age = $age;
        echo " is $this->age years old. <br>";
    }
}

$student1 = new Student("Mg Mg");
$student1Info = $student1->getContent();
$student1Info->Gender("male");
$student1Info->Age(16);

$student2 = new Student("Sarah");
$student2Info = $student2->getContent();
$student2Info->Gender("female");
$student2Info->Age(15);