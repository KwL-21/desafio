<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/maskedinput-1.1.2.pack.js"></script>

        <script>
            $(document).ready(function () {
                $("#enviar").click(function () {
                    //alert('teste');
                    var vnome = $("#nome").val();
                    var vemail = $("#email").val();
                    var vdtnasc = $("#dtnasc").val();
                    var vlogin = $("#login").val();
                    var vsenha = $("#senha").val();

                    //alert(vnome);

                    //$.post('url',{dados},'resposta')
                    $.post('gravar.php',
                            {nome: vnome,
                                email: vemail,
                                dtnasc: vdtnasc,
                                login: vlogin,
                                senha: vsenha},
                            function (resp) {
                                //resp: o que veio do gravar
                                $("#resposta").html(resp);
                            }
                    );
                });

                //$("#verificar").click(function(){
                //$("#login").change(function(){
                $("#login").keyup(function () {
                    var vlogin = $("#login").val();
                    $.post('verificarlogin.php',
                            {login: vlogin},
                            function (resp) {
                                //resp: o que veio do gravar
                                $("#verificacao").html(resp);
                            }
                    );
                });
                $("#dtnasc").mask("99/99/9999");
            });
        </script>

    </head>
    <body>

        <h4>Cadastro de Usuario</h4>

        <form>            
            Nome:<br/>
            <input type="text" id="nome"/><br/>
            E-mail:<br/>
            <input type="text" id="email"/><br/>
            Dt Nasc:<br/>
            <input type="text" id="dtnasc"/><br/>
            Login:<br/>
            <input type="text" id="login"/>
            <!--            
                <input type="button" id="verificar" value="Verificar disponibilidade"/>
            -->
            <span id="verificacao"></span>
            <br/>
            Senha:<br/>
            <input type="password" id="senha"/><br/>

            <input type="button" value="Enviar" id="enviar"/>
        </form>
        <div id="resposta"></div>

    </body>
</html>
