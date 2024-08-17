<?php

  // ** gettype()

  // Boolean => True Or False
  $sun = true; // Proven fact
  $salary = false; // Didn't receive his salary

  echo $sun . "<br/>"; // Output: 1
  echo $salary . "<br/>"; // Output: Empty

  echo gettype($sun) . "<br/>"; // Output: boolean
  echo gettype($salary) . "<br/>"; // Output: boolean


  // Integer => 1 | 10 | 50 | 1000
  $age = 20;

  echo $age . "<br/>"; // Output: 20

  echo gettype($age) . "<br/>"; // Output: number


  // (Float | Double | Floating point number) => 1.5 | 5.5 | 100.2
  $review = 4.3;

  echo $review . "<br/>"; // Output: 4.3

  echo gettype($review) . "<br/>"; // Output: double


  // String => "Hello, world!" | "Motaz Ramadan"
  $name = "Motaz Ramadan";
  $salary_value = "95000";

  echo $name . "<br/>"; // Output: Motaz Ramadan
  echo $salary_value . "<br/>"; // Output: Motaz Ramadan

  echo gettype($name) . "<br/>"; // Output: string
  echo gettype($salary_value) . "<br/>"; // Output: string


  // Null => null
  $x = null;

  // Array => [1,2,3,4,5] | ["A"=>1, "B"=>2] | array(1,2,3,4,5) | array("A"=>1, "B"=>2)
  $colors = ["Red", "White", "Blue", "Green"];
  echo gettype($colors) . "<br/>"; // Output: array

  // Object
  class user {}
  $user1 = new User();
  echo gettype($user1) . "<br/>"; // Output: object

  // Resource
  $file = fopen("data.txt", "r");
  echo gettype($file) . "<br/>"; // Output: resource