<?php
    function avg(){
		$nums=[1,2,3,4];
		$average= array_sum($nums)/count($nums);
		echo "Average of the array is: ".$average;
	}
	avg();
?>

