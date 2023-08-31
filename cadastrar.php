<?php

	$u = $_POST['user'];
	$p = $_POST['pass'];
	
	$p = md5($p);
	
	$pont = fopen("cad.txt","a+");
	
	fwrite ($pont,$u,strlen($u));
	fwrite ($pont,",",1);
	$p = $p . "\n";
	//fwrite ($pont,md5($p),strlen(md5($p)));
	fwrite ($pont,$p,strlen($p));
	
	fclose($pont);
	
	
?>