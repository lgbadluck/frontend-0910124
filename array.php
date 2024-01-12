<pre>
<?php

$array = [1, 5, 3, 99, -55, 100, 3, 4, 5, 6, 11, -3, 10, -2, -5, 0];
print_r($array);

/*
// Sorting with inbuild function
asort($array);
print_r($array);

$array_sort = [];
foreach ($array as $num) {
    $array_sort[] = $num;
}
print_r($array_sort);
*/

$n = count($array);
echo "size of array: $n" . "<br>";
$swap_temp = 0;
$did_swap = false;

for ($i = 0; $i < $n; $i++) {
    $did_swap = false;
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $swap_temp = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $swap_temp;
            $did_swap = true;
        }
    }
    if ($did_swap == false) break;
}
print_r($array);

$min_num = PHP_INT_MAX;
$max_num = PHP_INT_MIN;
$sum = 0;
$cntr = 0;

foreach ($array as $num) {
    $sum += $num;
    $cntr++;
    if ($num > $max_num) $max_num = $num;
    if ($num < $min_num) $min_num = $num;
}

$average = $sum / $cntr;

echo "Sum: $sum" . "<br>";
echo "Min value: $min_num" . "<br>";
echo "Max value: $max_num" . "<br>";
echo "Average value: $average" . "<br>";

?>
</pre>