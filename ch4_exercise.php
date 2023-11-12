<?php
// * ================== 1 ==================

echo "<h1>Problem 1</h1>";

function toBinary($number){
  $bin_num = '';
  while ($number > 0){
    $rem = $number % 2;
    $bin_num.=strval($rem);
    $number = intVal($number / 2);
  }
  for ($i=strlen($bin_num)-1; $i>=0; $i--){
    echo $bin_num[$i];
  }
}


function toOctal($num){
  $oct_num = '';
  while ($num > 0){
    $rem = $num % 8;
    $oct_num.=strval($rem);
    $num = intVal($num / 8);
  }
  for ($i=strlen($oct_num)-1; $i>=0; $i--){
    echo $oct_num[$i];
  }
}

$char = array(10=>'A', 11=>'B', 12=>'C', 13=>'D', 14=>'E', 15=>'F');

function toHexa($num){
  $hexa_num = '';
  while ($num > 0){
    $rem = $num % 16;
    switch ($rem){
      case 10:
        $hexa_num.=strval('A');
        break;
      case 11:
        $hexa_num.=strval('B');
        break;
      case 12:
        $hexa_num.=strval('C');
        break;
      case 13:
        $hexa_num.=strval('D');
        break;
      case 14:
        $hexa_num.=strval('E');
        break;
      case 15:
        $hexa_num.=strval('F');
        break;
      default:
        $hexa_num.=strval($rem);
    }
    
    $num = intVal($num / 16);
  }
  for ($i=strlen($hexa_num)-1; $i>=0; $i--){
    echo $hexa_num[$i];
  }
}


$num = 13;
echo "The Binary Number of $num is ";
toBinary($num); 

echo "<br>The Octal Number of $num is ";
toOctal($num); 

echo "<br>The Hexadecimal Number of $num is ";
toHexa($num); 



// * ================== 2 ==================

echo "<h1>Problem 2</h1>";

function toDecimal($num){
  $num = strval($num);
  $res = 0;
  for ($i=strlen($num)-1, $exp=0; $i>=0; $i--, $exp++){
    $res += pow(2, $exp) * $num[$i];
  }
  echo $res;
}

$bin = '00011101';
echo "<br>The Decimal of $bin is ";
toDecimal($bin);


// * ================== 3 ==================

echo "<h1>Problem 3</h1>";

echo "Elements of Array is ";
$num = [6, -7, 15, 10, -7, 11, -6, 12, 1, -7, 15, 8];
foreach($num as $n){
  echo "$n, ";
}

$odds = 0;
foreach($num as $n){
  if ($n % 2 != 0){
    $odds+=$n;
  }
}
echo "<br/>Total of odd numbers is $odds";


$evens = 0;
foreach($num as $n){
  if ($n % 2 == 0){
    $evens+=$n;
  }
}
echo "<br/>Total of even numbers is $evens";


$total = 0;
foreach($num as $n){
  $total+=$n;
}
echo "<br/>Total of array elements is $total";



$min = $num[0];
$indx = 0;
echo '<br/>The min number: ';
for ($i = 0; $i<count($num); $i++){
  $item = $num[$i];
  if ($item < $min){
    $indx = $i;
    $min = $item;
  }

}
echo $min.' at position '.$indx;


$max = $num[0];
$indx = 0;
echo '<br/>The max number: ';
for ($i = 0; $i<count($num); $i++){
  $item = $num[$i];
  if ($item > $max){
    $indx = $i;
    $max = $item;
  }

}
echo $max.' at position '.$indx;

// * ================== 4 ==================

echo "<h1>Problem 4</h1>";
$colors = array(
  "Light"=>array("Red", "Green" ,"Blue"),
  "Normal"=>array("Red", "Green" ,"Blue"),
  "Dark"=>array("Red", "Green" ,"Blue")
);

foreach ($colors as $i=>$color){
  echo "$i | ";
  foreach ($color as $j){
    echo "$i $j|";
  }
  echo "<br/>";
}


// * ================== 5 ==================


echo "<h1>Problem 5</h1>";

$numbers = array(
  [23,13,7,11,14],
  [12,6,	5,	1,	12],
  [14,3,	9,	2,	14],
  [5,	4,	-7,	8,	5],
  [14, 13,	7,	11,	23]
);

foreach ($numbers as $i=>$number){
  foreach ($number as $i){
    echo "$i, ";
  }
  echo "<br/>";
}

$odds = 0;
foreach ($numbers as $i=>$number){
  foreach ($number as $i){
    if ($i % 2 != 0){
      $odds+=$i;
    }
  }
}
echo "<br/>Total of odd numbers is $odds";


$evens = 0;
foreach ($numbers as $i=>$number){
  foreach ($number as $i){
    if ($i % 2 == 0){
      $evens+=$i;
    }
  }
}
echo "<br/>Total of even numbers is $evens";


$total = 0;
foreach ($numbers as $i=>$number){
  foreach ($number as $i){
    $total+=$i;
  }
}
echo "<br/>Total of array elements is $total";

// * D
echo "<br/>";
foreach ($numbers as $index=>$row){
  $total = 0;
  foreach ($row as $col){
   $total+=$col;
  }
  echo "<br/>Total of row $index is $total";
}

// * H
echo "<br/>";
$min = $numbers[0];
$indx = "";
foreach ($numbers as $i=>$row){
  foreach ($row as $j=>$col){
   if ($col < $min){
    $min = $col;
    $indx = "[$i, $j]";
   }
  }
}
echo "The smallest numner is $min at index $indx";


// * 
echo "<br/>";
$max = 0;
$indx = "";
foreach ($numbers as $i=>$row){
  foreach ($row as $j=>$col){
   if ($col > $max){
    $max = $col;
    $indx = "[$i, $j]";
   }
  }
}
echo "The smallest numner is $max at index $indx";