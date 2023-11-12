<?php
//* Problem 1
echo "<h2>Problem 1</h2>";
$n1 = 17;
$n2 = 13;

echo "<br/>$n1 * $n2 = ".$n1*$n2;
echo "<br/>$n1 / $n2 = ".$n1/$n2;
echo "<br/>$n1 % $n2 = ".$n1%$n2;

//* Problem 2
echo "<h3>Problem 2</h3>";
$num1 = 78;
$num2 = 45;
$num3 = 32;

if ($num1>$num2 && $num1>$num3)
  print "Number $num1 is the greatest.<br/>";
else if ($num2>$num1 && $num2>$num3)
  print "Number $num2 is the greatest.<br/>";
else if ($num3>$num1 && $num3>$num2)
  print "Number $num3 is the greatest.<br/>";

if ($num1<$num2 && $num1<$num3)
  print "Number $num1 is the smallest.<br/>";
else if ($num2<$num1 && $num2<$num3)
  print "Number $num2 is the smallest.<br/>";
else if ($num3<$num1 && $num3<$num2)
  print "Number $num3 is the smallest.<br/>";


//* Problem 3
echo "<h2>Problem 3</h2>";
$n = 90;
if (($n % 3 == 0) && ($n % 5 == 0))
  echo "$n is divisible by 3 and 5";
else if ($n % 3 == 0)
  echo "$n is divisible by 3";
else if ($n % 5 == 0)
  echo "$n is divisible by 5";
else 
  echo "$n is not divisible by both 3 and 5";

//* Problem 4
echo "<h2>Problem 3</h2>";
for ($i = 34; $i >= 7; $i-=2)
  print "$i, ";

//* Problem 5
echo "<h2>Problem 5</h2>";
$i = 50;
while ($i >= 2 ){
  if (($i % 2 == 0) && ($i % 5 == 0))
    echo "$i, ";
  $i--;
}

//* Problem 6
echo "<h2>Problem 6</h2>";
$n = 123456789;
$reversed = '';
$n_str = strval($n);

for ($i = strlen($n_str)-1; $i>=0; $i--){
  $reversed.="$n_str[$i]";
}
echo "Original Number: $n<br/>";
echo "Reversed Number: $reversed";


//* Problem 7
echo "<h2>Problem 7</h2>";
$n1 = 42;
$n2 = 70;

$min = ($n1<$n1)?$n1:$n2;
echo "The Common Factors of $n1 and $n2 are: ";
$x = 2;
do {
    if (($n1 % $x == 0) && ($n2 % $x == 0))
        echo "$x, ";
    $x++;
} while($x<=$min);


//* Problem 8
echo "<h2>Problem 8</h2>";
$n1 = 8;
$n2 = 12;
$max = ($n1>$n2)?$n1:$n2;

while(true){
  if (($max%$n1==0) && ($max%$n2==0)){
    echo "The LCM of $n1 and $n2 is $max";
    break;
  }
  $max++;
}

//* Problem 9
echo "<h2>Problem 9</h2>";
for ($i = 1; $i <=12; $i++){
  for ($j = 1; $j <= 12; $j++)
    echo "$i * $j = ".$i * $j."<br/>";
  echo "<br/>";
}


//* Problem 10
echo "<h2>Problem 10</h2>";
for ($num = 10; $num <= 50; $num++){
  $n = 0;
  for($i = 2; $i < $num; $i++) {
    if($num % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 0){
    echo "$num, ";
  } 
}

//* Problem 11
echo "<h2>Problem 11</h2>";
for ($i=2; $i<=10; $i++){
  $total = 1;
  for ($j=$i; $j>0; $j--){
    $total *= $j;
  }
  echo "The Factorial of $i is $total<br/>";
  $total = 1;
}