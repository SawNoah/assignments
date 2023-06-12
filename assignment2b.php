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
        if ($this->age < 12)
        {
            echo "Minimum age 12 is required to join the school. <br>";
        }
        elseif (12 <= $this->age && $this->age <15)
        {
            echo "Assign to Classroom No.1. <br>";
        }
        elseif (15 <= $this->age && $this->age <18)
        {
            echo "Assign to Classroom No.2. <br>";
        }
        else
        {
            echo "Over the age 18 is unable to join the school. <br>";
        }
    }
}

$student1 = new Student("Mg Mg");
$student1Info = $student1->getContent();
$student1Info->Gender("male");
$student1Info->Age(16);
echo "<br>";
$student2 = new Student("Sarah");
$student2Info = $student2->getContent();
$student2Info->Gender("female");
$student2Info->Age(14);