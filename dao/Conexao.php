<?php
//123456
 class  Conexao
{
    public static function connect()
    {
        $pdo = new PDO('mysql:host=localhost; dbname=wegia','root','teste');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

