<?php
    /**
	 * array_intersect() 返回一个数组，该数组包含了所有在 array1 中也同时出现在所有其它参数数组中的值。
	 * 注意: 键名保留不变。
	 */
    $array1 = array("a" => "green", "red", "blue");
	$array2 = array("b" => "green", "yellow", "red");
	
	$result = array_intersect($array1, $array2);
	print_r($result);
	
	//no key name
	$array1 = array("green", "red", "blue");
	$array2 = array("green", "yellow", "red");
	
	$result = array_intersect($array1, $array2);
	print_r($result);
?>