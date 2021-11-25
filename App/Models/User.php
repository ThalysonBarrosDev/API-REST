<?php

    namespace App\Models;

    class User {
        private static $table = 'tb_user';

        public static function select(int $id) {
            $connPdo = new \PDO (DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table.' WHERE idUser = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado!");
            }
        }

        public static function selectAll() {
            $connPdo = new \PDO (DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table;
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado!");
            }
        }

        public static function insert($data) {
            $connPdo = new \PDO (DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'INSERT INTO '.self::$table.' (nameUser, emailUser, passwordUser) VALUES (:na, :em, :pa)';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':na', $data['nameUser']);
            $stmt->bindValue(':em', $data['emailUser']);
            $stmt->bindValue(':pa', $data['passwordUser']);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Usuário(a) inserido(a) com sucesso!';
            } else {
                throw new \Exception("Falha ao inserir o usuário(a)!");
            }
        }
    }