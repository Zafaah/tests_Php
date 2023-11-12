<?php
echo "<h2> Welcome to PHP </h2>", "<hr/>";

$name = 'Hafsa Abdulkadir';
$experiance = 'Senier web developer';
$address = 'Shibis';

print('<h3>Introduction</h3>');
echo("
I'm <b>$name</b>, I'm a <b>$experiance</b>, Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo omnis est veniam dicta, non repudiandae corporis aliquam vero magni quam perferendis facilis neque esse, dolores, explicabo odit aut error incidunt.
<br><br>
");

echo "<hr/>";
$x = 89;
$y = 67;
($x > $y) ? print "$x is greater than $y" : print "$x is less than $y";
// ($x > $y)?echo "$x is greater than $y":echo "$x is less than $y";
echo "<br/>";

$a = 10;
$b = 20;
echo 'The value of a is $a and the value of b is $b';
echo '<br/>';
echo "The value of a is $a and the value of b is $b";

echo '<hr/>';


$subjects = ['Python', 'PHP', 'JavaScript', 'Java', 'C#'];
print <<< HERO
  <h3>Subjects</h3>
  <ul>
    <li>$subjects[0]</li>
    <li>$subjects[1]</li>
    <li>$subjects[2]</li>
    <li>$subjects[3]</li>
    <li>$subjects[4]</li>
  </ul>
HERO;
echo "<hr/>";

// 
$string = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, libero distinctio ipsum repellat iste unde vitae magni nesciunt vel alias rem tenetur et in, qui harum omnis. Officiis, dolore. Unde.';
echo $string;
echo "String Length is: ".strlen($string);
echo "<br/>Number of characters: ".str_word_count($string);


//* constants
echo "<hr/>";
define("URL", "www.hafsa.blog");
echo "Site URL <a href='#'>". URL ."</a>";
echo "<hr/>";

// 
echo '<h1>Odd or even</h1>';
$num = 98;
if ($num % 2 == 0)
  echo "$num is Even";
else
  echo "$num is Odd";
?>