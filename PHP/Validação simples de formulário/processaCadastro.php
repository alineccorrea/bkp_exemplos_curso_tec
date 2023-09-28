<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php   
            $nome = $_GET["nome"];
            $senha = $_GET["senha"];
            $email = $_GET["email"];
            
            $existe = isset($_GET["permanecer"]);
            if($existe == true){
                $permanecerConectado = "sim";
            }else{
                $permanecerConectado = "não";
            }
            
            echo("<h2>Nome digitado:  $nome </h2>");
            echo("<h2>Senha digitado:  $senha </h2>");
            echo("<h2>E-mail digitado:  $email </h2>");
            echo("<h2>Permanecer Conectado:  $permanecerConectado </h2>");
        ?>
    </body>
</html>
