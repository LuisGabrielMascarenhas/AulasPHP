<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página WEB - Sessão de ID</title>
</head>
<body>
    <?php
    
    session_start();

    ?>
    <h3>Sessão de Usuário</h3>
    SID desta sessão é : <?php echo session_id(); ?>
</body>
</html>