<?php

/**
 * Conn.class [ CONEXÃO ]
 * Classe abstrata de conexao. Padrao SingleTon.
 * Retorna um objeto PDO pelo método estaitico getCon();
 * @copyright (c) 2017, Adriano S. Pereira
 */
class Conn {

    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $Dbsa = DBSA;
    private static $Connect = null;

    /**
     * Conecta com o banco de dados o pattern Singleton
     * Retorna um objeto PDO
     */
    private static function Conectar() {

        try {
            if (self:: $Connect == null):
                $dsn = 'mysql:host=' . self::$Host . ';dbname=' . self::$Dbsa;
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$Connect = new PDO($dsn, self::$User, self::$Pass, $options);
            endif;
        } catch (PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            die;
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /*     * Retorna um objeto PDO SingleTon Pattern */

    public static function getConn() {
        return self::Conectar();
    }

}
