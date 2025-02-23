function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = array(1, 2, 3, 4, 5);
$sum = calculate_sum($numbers);
echo "The sum is: " . $sum; //This works fine

$numbers2 = array("1","2","3","4","5");
$sum2 = calculate_sum($numbers2);
echo "The sum is: " . $sum2; //This will return 15 instead of 15

$numbers3 = array(1, 2, "3", 4, 5);
$sum3 = calculate_sum($numbers3);
echo "The sum is: " . $sum3; //This will also return 15 instead of 15