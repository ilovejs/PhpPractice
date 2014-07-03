<?php
	/*	
	 * 如果输入的数组中有相同的字符串键名，则该键名后面的值将覆盖前一个值。(string must in form "aaaa", not "123")
	 * 如果数组包含数字键名，后面的值将不会覆盖原来的值，而是附加到后面。
	 */
	//string
	$beginning = 's';
	$end = array(1 => 'bar');
	$result = array_merge((array)$beginning, (array)$end);
	print_r($result);
	
	//number index
	//old index will gone
	$beginning = array(2 => 'akka');
	$end = array(1 => 'bar');
	$result = array_merge((array)$beginning, (array)$end);
	print_r($result);
	
	//string index - overwrite
	$beginning = array("aaa" => 'ss');
	$end = array("aaa" => 'aa');
	$result = array_merge($beginning, $end);
	print_r($result);
	
	//string index - no overwrite
	$beginning = array("1" => 'ss');
	$end = array("1" => 'aa');
	$result = array_merge($beginning, $end);
	print_r($result);
	
	//single quote
	$beginning = array('A' => 'ss');
	$end = array('A' => 'aa');
	$result = array_merge($beginning, $end);
	print_r($result);
	