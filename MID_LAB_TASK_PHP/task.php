<?php
//1
$length = 5.00;
$height = 4.00;
$ans1 = $length*$height;
$ans2 = (($length+$height)*2);

echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>NAME</td>
			</tr>";

		echo "<tr>
				<td>
        Problem-01:<br>
        length = 5.00;<br>
        height = 4.00;
        </td>
				<td>
        The area of a Rectangle ={$ans1}<br>
        The perimeter of a Rectangle ={$ans2}

        </td>
			</tr>";
      $ammount = 10000;
      $ans1 = ($ammount*0.15);
		echo "<tr>
				<td>
        Problem-02<br>
        Ammount = 10000
        </td>
				<td>
        VAT ={($ans1}<br>

        </td>
			</tr>";

      $num = 19;
      if ($num%2==0) {
        echo $num." is even<br>";
      }
      else {
        echo $num." is odd<br>";
      }

		echo "<tr>
				<td>
        Problem-03<br>
        Number is = 19
        </td>
				<td>
        Number 19 is ODD<br>

        </td>
			</tr>";


echo "</table>";
//4
$a =1;
$b =2;
$c =3;

if($a>$b and $a>$c)
{
    echo $a." is Largest<br><br>";
}
elseif ($b>$a and $b>$c) {
  echo $b." is Largest<br><br>";
}
else {
  echo $c." is Largest<br><br>";
}

//5

for ($i=10; $i <101 ; $i++) {
  if ($i%2!=0)
  {
    echo $i." is a odd number<br><br>";
  }
}

//6
$numbers = [2,5,3,686,23,1];
$largest = 0;
foreach ($numbers as $value) {
  if($largest < $value)
  {
    $largest = $value;
  }
}
echo $largest." is a the largest number<br><br>";

//7

//i

for ($i=1; $i <= 3; $i++) {
  for ($j=1; $j <= $i; $j++) {
    echo "*";
  }
  echo "<br>";
  echo "<br>";
}

echo "<br><br>";
//ii

for ($i=3; $i >= 1; $i--) {
  for ($j=1; $j <= $i; $j++) {
    echo $j;
  }
  echo "<br><br>";
}

//iii
$c='A';
  for($i=0;$i<3;$i++)
   {
   for($j=0;$j<=$i;$j++)
   {
      if($c=='Z')
      break;
      echo $c;
      $c++;
   }
   echo "<br><br>";
 }



 //8
 /*
 $arr = [
   [ 1, 2, 3,'A'],
   [ 1, 2, 'B','C'],
   [ 1, 'D', 'E','F'],
 ];


 for ($i=0; $i < 3; $i++) {
   for ($j=0; $j < 3; $j++) {
     for ($k=0; $k <3 ; $k++) {
       echo $arr[$i][$j];
     }

   }
   echo "\n";
 }
*/
 ?>
