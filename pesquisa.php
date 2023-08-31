<?php

	$u = $_POST['user'];
	$p = $_POST['pass'];
	
	$p = md5($p);
	//print $p;
	
	$pont = fopen("cad.txt","r");
	while (true)
	{
		$linha = fgets($pont);
		
		if ($linha == null)
		{
			break;
		} else{
			$linha = trim($linha);
			$cad = explode(",", $linha);
			//print_r ($cad);
			
			if ($cad[0]== $u && $p == $cad[1])
			{
				$achou = 1;
				break;
			}
			else
				$achou = 0;
		}
	}
	fclose($pont);
	
	if ($achou == 1)
		header("location: historia.php ");
	else
		print "senha o usuário errado";
	
	
?>