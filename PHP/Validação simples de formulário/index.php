<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            section{
                width: 500px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 100px;                
            }
        </style>
        <title></title>
    </head>
    <body>
        <!-- DATA: 23/06/2015 -->
        <section>
            <form action="processaCadastro.php" method="get">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>                
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="permanecer"> Permanecer Conectado
                    </label>
                </div>                
                <input type="submit" class="btn btn-default"/>
            </form>
        </section>
    </body>
</html>
