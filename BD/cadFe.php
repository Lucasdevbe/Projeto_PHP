<?php

include ("conecta.php");



    $minhasFe=$_POST["minhasFe"];

    $ponteiro=fopen("../cad.txt","a");

    fwrite ($ponteiro,$minhasFe."\n");
	

    header("location: ../index.html");

?>