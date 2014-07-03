<?php
/**
 * 对比返回在 array1 中但是不在 array2 及任何其它参数数组中的值。
 * Note:
 * 注意本函数只检查了多维数组中的一维。当然可以用 array_diff($array1[0], $array2[0]); 检查更深的维度。
 */
	$array1 = array("a" => "green", "red", "blue", "red");
	$array2 = array("b" => "green", "yellow", "red");
	$result = array_diff($array1, $array2);
	//only 'blue' is not in array2	
	print_r($result);

	