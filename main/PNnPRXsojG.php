<?php
function customSort($array) {
    usort($array, function($a, $b) {
        return $a <=> $b;
    });
    return $array;
}
function generateRandomArray($size, $min, $max) {
    $array = [];
    for ($i = 0; $i < $size; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}
function printArray($array) {
    foreach ($array as $value) {
        echo $value . " ";
    }
    echo "\n";
}
$randomArray = generateRandomArray(20, 1, 100);
printArray($randomArray);
$sortedArray = customSort($randomArray);
printArray($sortedArray);
function arraySum($array) {
    return array_reduce($array, function($carry, $item) {
        return $carry + $item;
    }, 0);
}
echo "Sum: " . arraySum($sortedArray) . "\n";
function arrayAverage($array) {
    return arraySum($array) / count($array);
}
echo "Average: " . arrayAverage($sortedArray) . "\n";
function findMax($array) {
    return max($array);
}
echo "Max: " . findMax($sortedArray) . "\n";
function findMin($array) {
    return min($array);
}
echo "Min: " . findMin($sortedArray) . "\n";
function arrayMedian($array) {
    sort($array);
    $count = count($array);
    $mid = floor($count / 2);
    return ($count % 2) ? $array[$mid] : ($array[$mid - 1] + $array[$mid]) / 2;
}
echo "Median: " . arrayMedian($sortedArray) . "\n";
function arrayMode($array) {
    $values = array_count_values($array);
    arsort($values);
    return array_keys($values)[0];
}
echo "Mode: " . arrayMode($sortedArray) . "\n";
?>
