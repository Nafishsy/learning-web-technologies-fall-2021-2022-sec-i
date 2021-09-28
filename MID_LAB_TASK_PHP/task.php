<?php
//1
$length = 5.00;
$height = 4.00;
 echo "The area of a Rectangle =".($length*$height)."\n";
 echo "The perimeter of a Rectangle =".(($length+$height)*2)."\n";

echo "<table border=1>
			<tr>
				<td>ID</td>
				<td>NAME</td>
			</tr>";

		echo "<tr>
				<td>Problem-01</td>
				<td>
        The area of a Rectangle ={($length*$height)}
        The perimeter of a Rectangle ={(($length+$height)*2)}

        </td>
			</tr>";
	}

	echo "</table>";

//2
$ammount = 10000;
echo "VAT = ".$ammount*0.15."\n";

//3
$num = 19;
if ($num%2==0) {
  echo $num." is even\n";
}
else {
  echo $num." is odd\n";
}

//4
$a =1;
$b =2;
$c =3;

if($a>$b and $a>$c)
{
    echo $a." is Largest\n";
}
elseif ($b>$a and $b>$c) {
  echo $b." is Largest\n";
}
else {
  echo $c." is Largest\n";
}

//5

for ($i=10; $i <101 ; $i++) {
  if ($i%2!=0)
  {
    echo $i."is a odd number\n";
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
echo $largest."is a the largest number\n\n";

//7

//i

for ($i=1; $i <= 3; $i++) {
  for ($j=1; $j <= $i; $j++) {
    echo "*";
  }
  echo "\n";
}

echo "\n\n";
//ii

for ($i=3; $i >= 1; $i--) {
  for ($j=1; $j <= $i; $j++) {
    echo $j;
  }
  echo "\n\n";
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
   echo "\n\n";
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
