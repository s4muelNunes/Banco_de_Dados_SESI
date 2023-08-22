<?php

    try {
        $conectar = new PDO("sqlite:banco/banco_biblioteca.db");

        $sql = $conectar->query("SELECT * FROM tb_usuario");

        $tb_usuario = $sql->fetchAll(PDO::FETCH_ASSOC);

        // for($i = 0; $i < count($tb_usuario); $i++){
        //     echo "Matricula: " . $tb_usuario[$i]['matricula'];
        //     echo "Nome: " . $tb_usuario[$i]['nome'];
        //     echo "Telefone: " . $tb_usuario[$i]['telefone'];
        //     echo "<br>";
        // }
    
        //echo "OK";
    } catch (\Throwable $th) {
        echo "não OK";
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Municipal</title>
    <link rel="stylesheet" href="./css/estiloss.css">
</head>
<body>
    <header>
        <img src="./img/Biblioteca-Banner.png" alt="Biblioteca-Banner">
        <nav>
            <ul>
                <li><a href="#"></a>Inicio</li>
                <li><a href="#">Usúarios</a></li>
                <li><a href="#">Livros</a></li>
                <li><a href="#">Emprestimos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="cadastro-usuario">
            <h2>Cadastro de Usuario</h2>
            <form action="usuarios_cadastro.php" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">

                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">

                <label for="rua">Rua</label>
                <input type="text" name="rua" id="rua">

                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero">

                <label for="cep">Cep</label>
                <input type="text" name="cep" id="cep">
                
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento">

                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">

                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">

                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado">



                <div class="botoes">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                </div>

            </form>
        </div>
        <div class="consulta">
            <h2>Consulta de usuarios</h2>
            <table>
                <tr>
                        <th>Matricula</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                </tr>
                <?php
                for($i = 0; $i < count($tb_usuario); $i++){
                    echo "<tr>";
                    echo "<td>" . $tb_usuario[$i]['matricula']. "</td>";
                    echo "<td>" . $tb_usuario[$i]['nome']. "</td>";
                    echo "<td>" . $tb_usuario[$i]['telefone']. "</td>";
                    echo "<td> <a href= '#'>Visualizar</a> <a href='#'>Excluir</a> </td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </main>
</body>
</html>