<?php

    include('config.php');
    MySql::conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Corretor</title>
    <link href="form.css" rel="stylesheet" >
</head>
<body>
        
<div class="container"> 
    <div class="form_cd">

        <?php
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
            if ($_POST['acao'] == 'excluir' && isset($_POST['id'])) {
                $id = $_POST['id'];
                Form::excluir($id);
                Form::alert('Sucesso', 'Usuário excluído com sucesso!');
            } elseif (isset($_POST['acao']) && $_POST['form'] == 'f_form'){
                $nome =$_POST['nome'];
                $cpf =$_POST['CPF'];
                $creci =$_POST['Creci'];
                Form::cadastrar($nome, $cpf, $creci);
                Form::alert('Sucesso', 'Usuario '.$nome. ' cadastrado com sucesso!');
            } 
        }    

        /*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] == 'editar') {
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $cpf = $_POST['CPF'];
                $creci = $_POST['Creci'];
            
                Form::editar($nome, $cpf, $creci);
            
                // Redirecione de volta para a página principal após a edição
                header('Location: index.php');
                exit();   
        }*/
        ?>


        <div><h2>Cadastro de Corretor</h2></div>
        <form method="post">            
            <div><input type="text" name="CPF" placeholder="Digite seu CPF" minlength="11" required></div>
            <div><input type="text" name="Creci" placeholder="Digite seu Creci" minlength="2" required></div>
            <div><input type="text" name="nome" placeholder="Digite seu Nome" minlength="2" required></div>
            <div><input type="submit" name="acao" value="Enviar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>
        </form>
    </div>    

    <div>
        <h2>Dados dos Corretores</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>CRECI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = MySql::conectar()->query("SELECT * FROM corretor");
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['nome']}</td>";
                    echo "<td>{$row['cpf']}</td>";
                    echo "<td>{$row['creci']}</td>";
                    echo "<td>";
                    echo "<button type='submit' name='acao' value='editar'>Editar</button>";
                    echo "<form method='post' action='index.php'>";
                    echo "<input type='hidden' name='id' value='{$row['id']}'>";
                    echo "<button type='submit' name='acao' value='excluir'>Excluir</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>