 <?php 

// lab3: object oriented features in php

// task:

// create a base class name "Employee" with following properties and method :
// - name : string 
// - address - string 
// - setName(name):void 
// - setAddress(address) : void

// create a child class named"FulltimeEmployee" that inherits 'Employee' class and has following properties and method
// salary: float
// position:string
// setSalary(salaryAmt):void
// setposition(position):void
// displayAll():

// create two object of fulltimeemployee passing name and address in constructor string and set salary and position uaing thier setter methods then call displayall() to display all properties(name,address,salary,position)

// question: 
//1. class and object, constructor and deconstructor, encapulation, inheritance and how  can be achieve it in php?


abstract class Employee{
    protected $name;
    protected $address;

    public function __construct($name, $address)
    {
       $this -> name = $name; 
       $this->address= $address;
    }
}

class FulltimeEmployee extends Employee{
     protected $salary;
     protected $position;

     public function setSalary($salaryAmount){
      $this ->salary =$salaryAmount;

     }
     public function setPost($Position){
       $this -> position = $Position;
     }
     public function displayAll(){
        echo "Name: $this->name<br>"; 
        echo "Address: $this->address<br>";
        echo "Salary: $this->salary<br>";
        echo "Post:$this->position<br>";
        echo "<pre>";
     }
}

$firstEmployee = new FullTimeEmployee("John", "Ktm",);
$firstEmployee->setPost('manager');
$firstEmployee->setSalary(2000);
$firstEmployee->displayAll();

?>
