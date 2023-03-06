
<?php

echo print_r($_POST);
echo $_POST['text'];
$login = $_POST['login'];
echo $login;


function sum($a, $b, $c)
{
  $q = ($a + $b + $c) / 3;
  echo "Function is: " . round($q) . '<br>';
  for ($i = 0; $i < 5; $i++) {
    echo $i . " Number:  " . $a = rand(1, 10) . '<br>';
  }
  if ($a < 5) {
    echo "Plus";
  } else {
    echo "None";
  }
  return $q;
}
function casic($well)
{

  switch ($well) {
    case 1:
      echo " Var is $well " . '<br>';
      break;
    case 3:
      echo "Var is 3" . '<br>';
      break;
    case 5:
      echo "Var is $well" . '<br>';
      break;
    default:
      echo "Defualt bruh";
  }
}
function massive($age, $size, $lenght, $key_age, $key_size)
{

  $allinclusive = array($age, $size, $lenght);
  $list = ["Age" => $allinclusive[0], "Size" => $allinclusive[1]];


  for ($i = 0; $i < count($allinclusive); $i++) {
    echo "Array: $allinclusive[$i]" . '<br>';
  }
  foreach ($list as $item => $value) {
    echo "Key: " . $item .  " Value: " . $value . '<br>';
  }
  //  for ($a = 0; $a < count($list); $a++) {
  //   echo key($list[$a])  . $list[$a]  . '<br>';
  // }
}
$Refresh = "Refresh";

function summary($arr)
{
  global $Refresh;
  static $quantity;
  $quantity++;
  $AloneNightsAgain = 0;
  foreach ($arr as $value) {
    $AloneNightsAgain  = $AloneNightsAgain + $value;
  }
  return "All sum in array: " . $AloneNightsAgain . '<br>' . "Quanity of start: " . $quantity . '<br>' . $Refresh;
}
// Functions Testing

// MathRandom + For + Round 
sum(1, 1.2, 1);
//Case 
casic(5);
// Massive / Array
massive(19, 41, 50, 0, 1);
// ForEach 0 + $value of Array
echo summary([1, 2]) . '<br>';

// Functions Testing




// Shitttttttttttt

// Shitttttttttttt
?>
