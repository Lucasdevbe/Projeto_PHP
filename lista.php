
    <?php
    include("conecta.php");

    $seleciona=mysqli_query($conect,"select * from usuarios order by senha desc");
    while($campo=mysqli_fetch_array($seleciona)){?>
    
      <td><?=$campo["senha"]?></td>
      <td><?=$campo["name"]?></td>
      <td><?=$campo["ferias"]?></td>
    </tr>
        
    <?php }?>