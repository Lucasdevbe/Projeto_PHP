<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/minhasFe.css">
    <link rel="stylesheet" href="lista.php">
    <link rel="shortcut icon" href="imgens/icons8-kite-16.png" type="image/x-icon">
    <title>criação site 1.0</title>
</head>
<body>
    <main>
        
    <section>
      <div >
        <h1 class="textFe">Agora chegou a hora de nos contar como foram suas férias,<br> escreva o que você fez, em que lugares foi e como se divertiu.</h1>
        <?php
        
        /*
        function gerar_senha($tamanho, $maiusculas,$numeros){
          $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ";
          $nu = "0123456789";
          $senha = "000000";
          if ($maiusculas){
            // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($ma);

            if ($numeros){
              // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
              $senha .= str_shuffle($nu);
          }

          return substr(str_shuffle($senha),0,$tamanho);
      }
    
        }
        
        
   $senha =gerar_senha(6, true, true, false, false);
   echo $senha;*/

   

   

    

    
?>
      </div>
    </section>
      
       <section>
         
        
         
               <?php
               $brinquedos=$_POST["brinquedo"];
                $emocao=$_POST["emocao"];

               for($i= 0;$i < sizeof($brinquedos);$i++){
                 echo '<label class="brinquedo">'.$brinquedos[$i].'</label>';
               }
               for($i=0;$i<sizeof($emocao);$i++){
                echo '<label class="brinquedo">'.$emocao[$i].'</label>';
               }
               ?>
         
      
         
       </section>
      
      <section>
        <div class="fundo_losa">
        
          <form action="BD/cadFe.php" method="POST">
            <textarea name="minhasFe" id="IminhasFe" cols="30" rows="10" placeholder="CLIQUE AQUI PARA COMEÇAR"></textarea>
            
            <div >

              <input type="submit" value="Enviar" class="button">
              <a href="minhaAtiv.html" class="button">Voltar</a>
            </div>
          </form>
          
          
        </div>
      </section>
             </table>
         
            <div vw class="enabled">
                <div vw-access-button class="active"></div>
                <div vw-plugin-wrapper>
                  <div class="vw-plugin-top-wrapper"></div>
                </div>
              </div>
              <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
              <script>
                new window.VLibras.Widget('https://vlibras.gov.br/app');
              </script>
    </main>
    
</body>

</html>