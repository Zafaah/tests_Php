<?php
//* problem 1
echo "<h2>Problem 1</h2>";
$n1 = 12;
$n2 = 8;
if ($n1 < $n2)
    echo "$n1 is the smallest";
else if ($n2 < $n1)
    echo "$n2 is the smallest";
else 
    echo "$n1 and $n2 are equal";


//* Problem 2
echo "<h2>Problem 2</h2>";
$num = 990;
if ($num % 2 == 0)
    echo "$num is Even";
else
    echo "$num is Odd";

// * Problem 3 odd
echo "<h2>Problem 3</h2>";
$i = 2;
while ($i < 22){
    if ($i % 2 == 1)
        echo "$i, ";
    $i++;
}


//* Problem 4
echo "<h2>Problem 4</h2>";
for ($i = 5; $i<=50; $i+=5){
    echo "$i, ";
}


//* Problem 5
echo "<h2>Problem 5</h2>";
$fact = 5;
$total = 1;
for ($i=$fact; $i>0; $i--){
    $total*=$i;
}
echo "Factorial of $fact is $total";

//* Problem 6
echo "<h2>Problem 6</h2>";
$f = 42;
echo "The Factors of $f are: ";
$x = 1;
do {
    if ($f % $x == 0)
        echo "$x, ";
    $x++;
} while($x<=42);


//* Problem 7
echo "<h2>Problem 7</h2>";
$n = 42;
for ($num = 2; $num<=$n; $num++){
  if ($n % $num == 0){
    $prime = 0;
    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0){
            $prime++;
            break;
        }
    }
    if ($prime == 0){
        echo "$num, ";
    } 
  }
}

//* Problem 8
echo "<h2>Problem 8</h2>";
$n1 =18;
$n2 = 24;

$min = ($n1 < $n2)?$n1:$n2;
$hcf = 1;

for ($i = 1; $i <= $min; $i++){
    if (($n1 % $i == 0) && ($n2 % $i == 0)){
        $hcf = $i;
    }
}
echo "The HCF of $n1 and $n2 is $hcf";


//* Problem 9
echo "<h2>Problem 9</h2>";
$num = 6;
$prime = 0;

for($i = 2; $i < $num; $i++) {
    if($num % $i == 0){
        $prime++;
        break;
    }
}

if ($prime == 0){
    echo "$num is a prime number";
} else{
    echo "$num is not a prime number";
}
  
//* Problem 10
echo "<h2>Problem 10</h2>";
for ($num = 90; $num >= 12; $num--){
  $n = 0;
  for($i = 2; $i < $num; $i++) {
    if($num % $i == 0){
      $n++;
      break;
    }
  }

  if ($n == 1){
    echo "$num, ";
  } 
}

//* Problem 11
echo "<h2>Problem 11</h2>";
$n1=1; 
$n2=0;
for($i = 0; $i<=15; $i++){
  echo " $n2, ";
  $temp = $n1+$n2; 
  $n1 = $n2;   
  $n2 = $temp;  	
}


//* Problem 12
echo "<h2>Problem 12</h2>";
$a = 2;
$b = 6;
$c = 4;

$x1 = (-$b + sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);
$x2 = (-$b - sqrt(pow($b,2) - 4 * $a * $c)) / (2 * $a);

echo "The values are $x1 and $x2<br/>";
