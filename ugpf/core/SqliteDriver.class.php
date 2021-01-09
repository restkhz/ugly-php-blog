<?php
namespace Ugly;

use \PDO;
//use \PDOException;

/**
 *
 */
class SqliteDriver extends Ugly
{

    protected static $_pdo=null;

    public static function pdo()
    {
      if(self::$_pdo == null) {
        self::$_pdo = new PDO('sqlite:'. self::$config['DB']['PATH']. self::$config['DB']['NAME']);
        self::$_pdo->exec('PRAGMA synchronous = OFF;');
      }
      return self::$_pdo;
    }

}
