<?php 
	$A = 123; //variabel global
	function test(){
		$A = "Test"; //variabel local
		echo"Nilai A dalam fungsi = $A \n";
	}
	Test();
	echo "Nilai A luar fungsi = $A \n";
?>