<?php
    
define  ("SERVIDOR", 'localhost');
define  ("USUARIO", 'dcfiu704_dfiuza');
define  ("SENHA", 'Dg.131208');
define  ("BD", 'dcfiu704_dcfiuza');
define  ("CHARSET", 'utf8');

    $conexao = mysqli_connect (SERVIDOR, USUARIO, SENHA, BD) or die ("Não foi possivel conectar ao banco de dados'");
    mysqli_set_charset($conexao, CHARSET) or die (mysqli_error($conexao));
?>
