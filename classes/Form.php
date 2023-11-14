<?php

    class Form{

        public static function cadastrar($nome, $cpf, $creci){
            $sql = MySql::conectar()->prepare("INSERT INTO corretor VALUES (null, ?,?,?)");
            $sql->execute(array($nome, $cpf, $creci));

        }

        public static function excluir ($id){
            $stmt = MySql::conectar()->prepare("DELETE FROM corretor WHERE id = ?");
            $stmt->execute([$id]);
        }

        public static function alert($tipo, $mensagem)
        {
            echo "<div class='alert alert-$tipo'>$mensagem</div>";
        }
    }


?>