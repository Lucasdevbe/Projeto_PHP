<?php

 include("conecta.php");

    $name=$_POST["name"];
    $escola=$_POST["escola"];
    $senha=$_POST["senha"];
    

    mysqli_query($conect, "insert into usuarios (senha,name,escola) values ('$senha','$name','$escola')");

    $ponteiro=fopen("../cad.txt","a");

    fwrite ($ponteiro,$name."\n");
	fwrite ($ponteiro,$escola."\n");


    header("location: ../minhaAtiv.html");

?>