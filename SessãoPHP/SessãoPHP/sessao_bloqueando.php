<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloqueando Paginas por sessões</title>
    <?php
    session_start();
    $_SESSION['nome']= $_POST['nome'];
    
    $_SESSION['senha']=$_POST['senha'];
    
    ?>
</head>  
<body>
  <b> Funcionário:</b> <?php echo $_SESSION['nome'] ?>, logado com sucesso.<br/>
  <b> Data de Conexão:</b> <?php echo date("d/m/y")?><br>
  <b> Hora de conexão</b> <?php echo date("h:i:s")?><br>

  <a href="sessoes_verifica_sessao.php">Área de Administrador</a>
</body>
</html>