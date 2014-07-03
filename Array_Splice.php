<?php
    /**
	 * array array_splice ( array &$input , int $offset [, int $length = 0 [, mixed $replacement ]] )
	 * 把 input 数组中由 offset 和 length 指定的单元去掉，如果提供了 replacement 参数，则用其中的单元取代。
	 * 
	 * 如果指定了 length 并且为负值，则移除从 offset 到数组末尾倒数 length 为止中间所有的单元(Block) see line: 17
	 * 
	 * 小窍门：当给出了 replacement 时要移除从 offset 到数组末尾所有单元时，用 count($input) 作为 length。
	 * 注意 input 中的数字键名不被保留。
	 * 
	 * 返回一个包含有被移除单元的数组。
	 */
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 2);
	// $input is now array("red", "green")
	
	$input = array("red", "green", "blue", "yellow", "joke");
	array_splice($input, 1, -1);   //length = -1
	// $input is now array("red", "joke")
	print_r($input);
	
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 1, count($input), "orange");
	// $input is now array("red", "orange")
	
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, -1, 1, array("black", "maroon"));
	// $input is now array("red", "green",
	//          "blue", "black", "maroon")
	
	$input = array("red", "green", "blue", "yellow");
	array_splice($input, 3, 0, "purple");
	// $input is now array("red", "green",
	//          "blue", "purple", "yellow");	 
	 
?>