<?php

// This is the start of a blueprint for a class.
class Task {
  // This is a property that has a hard coded value for description.
  // public $description = 'Time to go shopping';

  // Here I've identified a title property with no default value.
  public $title;

  // Here I've identified a description property with no default value.
  public $description;

  // Here I'm creating another property and hard coding a default value.
  public $completed = false;

  // Here I'm adding a special method to the class.  All functions inside of a class are classed methods on an object.
  // This method is also what is called a constructor.  A constructor is called imiditly when a class is instaneated. 
  // - If arguments are made available/given when the class is instateated, they will be passed to the constructor when fired. 
  public function __construct($title, $description)
  {
    // An example to ensure that the constructor is firing when called "php task.php".  This is without having any arguments given.
    // var_dump('Hello');

    // This is doing a var_dump of the argument given.
    // var_dump($description);

    // Now by doing the following, I'm setting/assigning the argument given as the value for both these property. $this = This object or this instances of our class.
    $this->title = $title;
    $this->description = $description;

    // Now by doing the following, your wanting to set/assign the argument given as the value for this property. $this = This object or this instances of our class.
    // $this->description = $description;
  }

  public function complete()
  {
    // Here I'm setting/assigning the value for this property. $this = This object or this instances of our class.
    $this->completed = true;
  }
}

// Now in order to get access to the class we have to create an instance of the class. The instances of the class is called an object.
// - The variable can be called anything = $task
// - The = new means that we are creating a new object
// - We have to identify the class that we are creating a new object from = Task();
// $task = new Task();

// This is how you would pass arguments and the constructor pick them up.
// $task = new Task('Hello People');

// Now you can have multiple instances of a class you just have to ensure you name them differently.
// $task2 = new Task('Work this MAN!');

// Now I'm going to have an instances of a class that will return two arguments ($title, $description). 
$task3 = new Task('Kevin', 'Work this MAN!');

// By do the above we now have access to the description property.  We're going to var_dump the information for the description property.  If the description property hasn't been set then you will receive a NULL value in the return.
// var_dump($task->description);

// Now in order to call the second instances of this class you have to update you information.
// var_dump($task2->description);

// So here I'm running a var_dump on the property above.  You must have an instances of the class in order for this to work.
// var_dump($task->completed);

// The following is referring to a method and not a property.  Again methods are used as a term for a function.
// $task->complete();

// Here I'm running a var_dump on the completed property.
// var_dump($task->completed);

// Here I'm return the title and the description.
var_dump($task3->title . ', ' . $task3->description);