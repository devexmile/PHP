<?php

class Person {

  // This is setting the properties
  public $name;

  public $age;

  // Using the constructor requires that something is given.  So here we will accept a name.
  public function __construct($name)
  {
    // This is assigning the name to the $name variable.
    $this->name = $name;
  }

  // “Getters” and “Setters” are object methods that allow you to control access to a certain class variables / properties. A “getter” allows to you to retrieve/return or “get” a given property. A “setter” allows you to “set” the value of a given property.

  // With a getter method you don't accept any arguments.
  public function getAge()
  {
    // Here we are defining the behavior of the getAge method.  We are going to multiple any age 18 and above by 365, which will let us know how many days the Person has been alive.
    return $this->age * 365;
  }

   // With a setter method you do accept an argument.
  public function setAge($age)
  {
    // This setAge method can also be looked at as a hook or security measure to write validation.
    // If the Person is 18 or older than the age will be displayed.
    if ($age < 18)
    {
      // If the Person is 17 or younger than the following message will be displayed. 
      throw new Exception("Person is not old enough.");
    } 
    // This is assigning the age to the $age variable, as well as assigning the value to the setAge method if the value given is 18 or older.
    $this->age = $age;
  }
}

// Again outside of the method we will create an instance of the Person class.
// This is passing 'Kevin Jones' as an argument with the new instance.
$kevin = new Person('Kevin Jones');

// This is setting age to 30 for the new instance, accessing it directly.  This is bad, because you have no way of hooking into it to provide or check validation(add behavior).  If your property is public then the outside has complete control of this property.
// $kevin->age = 30;

// This will increment the age up by 1.
// $kevin->age++;
 
// So to prevent access to the $age property directly, we can use a setter.
$kevin->setAge(30);

// Here we are just dumping the getAge method information for the $kevin object.
var_dump($kevin->getAge());

// Here we are just dumping all the information for the $kevin object.
// var_dump($kevin);