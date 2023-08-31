<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias</title>
</head>
<body>
    <table width="100%" >
        <tr>
            <td>nome</td>
            <td>escola</td>
            <td>idade</td>
        </tr>
        <tr>
            <?php
             include("BD/conecta.php");
             $seleciona=mysqli_query($conect,"select * from usuarios order by id desc");

             while($campo=mysqli_fetch_array($seleciona)){?>
             <tr>
                <td><?=$campo["name"]?></td>
                <td><?=$campo["escola"]?></td>
                <a href="http://"></a>
             </tr>
             <?php }?>
            
        </tr>
    </table>
</body>
</html>
<?php






?>