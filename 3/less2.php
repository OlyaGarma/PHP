<?php 
//1.
function getCamelCase($some_string) {
  $changeArr = array("_" => " ");
  $changeArr2 = array(" " => "");
  if (!is_string($some_string)) {
    echo "Ввести строку <br>";
    return false;
  }
  if (is_string($some_string)) {
    $new_string = lcfirst(
                    strtr(
                      ucwords(
                          strtr($some_string, $changeArr))
                              , $changeArr2));
  } return $new_string;
}
$string = 'this_is_string';
var_dump(getCamelCase($string);

//2.
function getName (string $path) {
	$name = explode('\\', $path);
	$name = array_pop($name);
	$name = explode('.', $name);
	return $name = array_shift($name);
}
$test2 = 'C:\OpenServer\testsite\www\someFile.txt';
var_dump(getName($test2));
//3.

function comparisonString (string $str1, string $str2) {
	$editString1 = $str1;
	$editString2 = $str2;
	$editString1 = explode(' ', $editString1);
	$editString2 = explode(' ', $editString2);
	$result = array_intersect($editString1, $editString2);
	if ($str1 === $str2) {
		var_dump("Совдают на 100% - 5 баллов");
	} else if (strtolower($str1) == strtolower($str2)) {
		var_dump("Совпадают на 75% - 4 балла");
	} else if (count($result) > count($editString1)/2) {
		var_dump("Совпадают на 50% - 3 балла");
	} else if (count($result) > 0) {
		var_dump("Совпадают на 25% - 2 балла");
	} else  {
		var_dump("Совпадают на 0% - 1 балла");
	}
}
$str1="привет, как дела? что делаешь? как погода? приехал к бабуле?";
$str2="передавай бабуле привет";
comparisonString($str1, $str2);
//4.

$array = [13, 55, 100];
function sortArray ($array) {
	$sum_array = [];
	$arrayforMultisort = $array;
	for ($n = 0; $n < count($array); $n++) {
		$str = (string) $array[$n];
	for ($i = 0; $i < strlen($str); $i++) {
		$result += $str[$i];
	}
	$sum_array[$n] = $result;
	$result = 0;
	}
	array_multisort($sum_array, $arrayforMultisort);
	var_dump('Начальный массив',  $array);
	var_dump('Отсортированный массив',$arrayforMultisort);
	var_dump('Сумма чисел отсортированного массива',$sum_array);	
}
sortArray($array);
//5.
$toUpper = function($str) {
	return $converted = strtoupper($str);
};
$toLower = function($str) {
	return $converted = strtolower($str);
};
$firstToUpper = function($str) {
	$converted = strtolower($str);
	return $converted = ucwords($converted);
};
function converter (string $str, callable $func) {
	return $func($str);
}
$string = "Hello, it's me! I was wondering if after all these years";
var_dump(converter($string, $firstToUpper));

