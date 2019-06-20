<?php
class Recipe
{
  // Variables inside of a class is called a property.
  public $title;
  public $ingredients = array();
  public $instructions = array();
  // The yield property would not have a default value.
  public $yield;
  // Here I've initializing ingredients with an empty array.
  public $tag = array();
  // Here I've set the default source to 'Postman'.
  public $source = "Postman";

}

$recipe1 = new Recipe();

var_dump($recipe1);

// #result in the terminal from the var_dump($recipe1);
// This tells us that our variable type is an object and it's an instance of the class recipe.

// $ php classes/recipe.php
// object(Recipe)#1 (0) {
// }