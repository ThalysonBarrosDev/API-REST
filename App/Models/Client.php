<?php

    namespace App\Models;

    class Client {
        private static $table = 'tb_cliente';

        public static function select(int $id) {
            $connPdo = new \PDO (DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table.' WHERE idCliente = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum cliente encontrado!");
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
                throw new \Exception("Nenhum cliente encontrado!");
            }
        }

        public static function insert($data) {
            $connPdo = new \PDO (DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'INSERT INTO '.self::$table.' (nomeCliente, cpfCliente, enderecoCliente) VALUES (:na, :cpf, :end)';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':na', $data['nomeCliente']);
            $stmt->bindValue(':cpf', $data['cpfCliente']);
            $stmt->bindValue(':end', $data['enderecoCliente']);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Cliente(a) inserido(a) com sucesso!';
            } else {
                throw new \Exception("Falha ao inserir o cliente(a)!");
            }
        }
    }