
<?php
echo "<strong>Посчитать длину массива:</strong>" . "<br>";
$arr=[1,2,3,7,31,4,1,8,6];
echo "Длинна массива: " . count($arr) . "<br>";
echo "<strong>Переместить первые 4 элемента массива в конец массива:</strong>" . "<br>";
for ($i = 0; $i < 4; $i++) {
    $res = $arr[$i];
    $arr[] +=$res;
}
array_splice($arr, 0, 4);
echo '<pre>';
var_dump($arr);
echo '<pre>';
echo "<strong>Получить сумму 4,5,6 элемента</strong>" . "<br>";
echo "Сумма массива 4.5.6 = ";
var_dump($arr [3] + $arr[4]  + $arr[5]) ;
echo " " . "<br>";

$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];



$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];
echo "<strong>Найти все элементы которые отсутствуют в первом массиве и присутствуют во втором :</strong>" . "<br>";
var_dump(array_diff_key($secondArr , $firstArr));

echo "<strong>Найти все элементы которые присутствую в первом и отсутствуют во втором :</strong>". "<br>";
var_dump(array_diff_key($firstArr , $secondArr));


echo "<strong>Найти все элементы значения которых совпадают :</strong>". "<br>";
$result_array = array_intersect_assoc($firstArr, $secondArr);
print_r($result_array);

echo "<strong>Найти все элементы значения которых отличается :</strong>". "<br>";
$result1 = array_diff_assoc($firstArr, $secondArr);
print_r($result1);

$firstArr2 = ['one' => 1, 'two' =>
['one' => 1, 'seven' => 22, 'three' => 32,], 'three' =>
['one' => 1, 'two' => 2,], 'foure' => 5, 'five' =>
['three' => 32, 'foure' => 5, 'five' => 12,],];
echo "<strong>Получить все вторые элементы вложенных массивов: </strong>" . "<br>";
  // function for($arr) {
  //     $i = 0;
  //     foreach($arr as $k => $v) {
  //         if(is_array) {
  //             for($k);
  //         } else {
  //             if($i == 1) { // второй элемент массива
  //                 // solution
  //             }
  //         }
  //         $i++;
  //     }
  // }
function arrSecond($arr) {
    $result = [];
    foreach ($arr as $key => $value) {
        if (is_array($value)){
            $result[] = array_values($value)[1];
        }
    }
    return $result;
}
print_r(arrSecond($firstArr2));
echo "<strong>Получить общее количество элементов в массиве: </strong>" ;
print_r(count($firstArr2, COUNT_RECURSIVE));
echo " " . "<br>";

echo "<strong>Получить сумму всех значений в массиве: </strong>" ;
$sum = 0;
array_walk_recursive($firstArr2, function($number) use (&$sum) {
    $sum += $number;
});
echo $sum;
 ?>
