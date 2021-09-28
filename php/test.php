<?php
  $name = 'nafiz ahmed';
  $id = 12;
  $cgpa = 4.00;

  /*$student =  array(1,'alaim',4.0);
  $student =  [1,'alaim',4.0];

  $student[2];*/


  $student = ['id' => 1, 'name'=>'nafiz', 'cgpa'=>4.0];
  $students = [
    ['id' => 1, 'name'=>'nafiz', 'cgpa'=>4.0],
    ['id' => 1, 'name'=>'nafiza', 'cgpa'=>3.0],
    ['id' => 1, 'name'=>'nafiasz', 'cgpa'=>4.0],
  ];

  /*print('hello PHP\n');
  echo "sup ".$name;
  print_r($student);*/

  echo "hmm.. ".$students[2]['cgpa'];


 ?>
