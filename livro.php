<?php

    try {
        $conectar = new PDO("sqlite:banco/banco_biblioteca.db");

        $sql = $conectar->query("SELECT * FROM tb_livro");

        $tb_livro = $sql->fetchAll(PDO::FETCH_ASSOC);
        /* for ($i = 0; $i < count($tb_usuario); $i++) { 
            echo "Matricula: " . $tb_usuario[$i]['matricula'];
            echo "Nome: " .  $tb_usuario[$i]['nome'];
            echo "Telefone: " .  $tb_usuario[$i]['telefone'];
            echo "<br>"; 
        } */
        //echo "OK";
    } catch (\Throwable $th) {
        echo "Burro do krlh";
    }

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <header>
        <img src="./img/Biblioteca-Banner.png" alt="Biblioteca-Banner">
        <nav>
            <img class="Logo" src="./img/Logo.png" alt="">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="livro.php">Livros</a></li>
                <li><a href="#">Emprestimos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="cadastro">
            <h2>Cadastro de Usuário</h2>
            <form action="livros_cadastro.php" method="post">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo">

                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor">

                <label for="editora">Editora</label>
                <input type="text" name="editora" id="editora">

                <label for="ano_de_publicacao">Ano Publicação</label>
                <input type="text" name="ano_de_publicacao" id="ano_de_publicacao">

                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" id="quantidade">

                <div class="botoes">
                    <input type="submit" value="cadastrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>

        </div>
        <div class="consulta">
            <h2>Consulta dos Livros</h2>
            <table>
                <tr>
                    <th>Codigo Catalogação</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Opções</th>
                </tr>
                <?php
                for ($i = 0; $i < count($tb_livro); $i++) { 
                    echo "<tr>";
                    echo "<td>" . $tb_livro[$i]['codigo_catalogacao'] . "</td>";
                    echo "<td>" . $tb_livro[$i]['titulo'] . "</td>";
                    echo "<td>" . $tb_livro[$i]['autor'] . "</td>";
                    echo "<td> <a href='#'>Visualizar</a> <a href='#'>Excluir</a></td>"; 
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </main>
</body>

</html>