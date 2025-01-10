<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php date_default_timezone_set("America/Sao_Paulo"); ?>
        <title></title>

        <script type="text/javascript" src="js/cidades-estados-v0.2.js"></script> 
        <script type="text/javascript">
            window.onload = function () {
                new dgCidadesEstados(
                        document.getElementById('estado'),
                        document.getElementById('cidade'),
                        true
                        );
            }
        </script>

        <style>
            #estado,#cidade{
                width: 190px;
            }
        </style>

    </head>
    <body>

        <h4>Cadastro de Cliente</h4>

        <form action="gravar.php" method="post">
            Nome:<br/>
            <input type="text" name="nome" required="true"/><br/>
            E-mail:<br/>
            <input type="email" name="email" required="true"/><br/>
            Data de Nascimento:<br/>
            <select name="dia">
                <option value=""/>Dia
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo "<option value='" . $i . "'/>" . $i;
                }
                ?>
            </select>
            <select name="mes">
                <option value=""/>Mês
                <?php
                for ($i = 1; $i <= 12; $i++) {
                    echo "<option value='" . $i . "'/>" . $i;
                }
                ?>
            </select>

            <select name="ano">
                <option value=""/>Ano
                <?php
                for ($i = date("Y"); $i >= date("Y") - 100; $i--) {
                    echo "<option value='" . $i . "'/>" . $i;
                }
                ?>
            </select>            
            <br/>

            Cpf:<br/>
            <input type="text" name="cpf" required="true" pattern="\d{3}.\d{3}.\d{3}-\d{2}" title="Ex: 999.999.999-99"/><br/>
            Endereço:<br/>
            <input type="text" name="endereco" size="60" placeholder="Ex: Av. Rio Branco, 185 - Sala 901 - Centro "/><br/>
            Cep:<br/>
            <input type="text" name="cep"/><br/>
            Estado:<br/>
            <select name="estado" id="estado">                
            </select>
            <br/>
            Cidade:<br/>
            <select name="cidade" id="cidade">
                <option value=""/>Escolha primeiro um estado
            </select>
            <br/>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>
