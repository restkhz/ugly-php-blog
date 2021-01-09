<?php
namespace Ugly;

/**
 * Mother Model
 * Provide funcs for SQL
 */
class Model extends Ugly
{

  public static $pdo;
  public $queryString;
  public $table;
  public $stmt;
  public $params = [];

  /**
   * Insert operation
   * @param  array  $param using KV : 'username' => 'root'
   * @return obj    stmt
   */
  public function insert($param)
  {
      $sql_1 = 'INSERT INTO ' . $this->table . ' (';
      $sql_2 = '';
      $sql_3 = '';

      foreach ($param as $key => $value) {
        $sql_2 .= $key.',';
        $sql_3 .= ' ? ,';
      }

      $this->queryString = $sql_1 . rtrim($sql_2, ',') . ') values(' . rtrim($sql_3, ',') . ' )';
      $this->stmt = self::$pdo->prepare($this->queryString);
      $this->_checkPre();
      $this->stmt->execute(array_values($param));
      $this->_checkErr();
      return $this->stmt;
  }

    /**
     * Update operation
     * @param  array $columns  Array without keys. (Columns)
     * @param  array $array for data
     * @return void
     */
  public function update($columns,$array)
  {
      $sql_1 = 'UPDATE ' . $this->table . ' SET ';
      $sql_2 = '';

      foreach ($columns as $k) {
        $sql_2 .= $k . '= ? ,';
      }

      $this->params = array_merge($this->params,$array);

      $this->queryString = $sql_1 . rtrim($sql_2, ',');
      return $this;
  }


  /**
   * Construct WHERE for pdo->prepare
   * !! IN PREPARE!! AVOID SQLi
   * DO NOT PUT ANY USER VARs IN THE FIRST PARAM
   * @param  string   Required! $param should be used like 'CALORIES < ?'
   */
  public function where($column, $param, $mark='=')
  {
        $this->queryString .= "WHERE {$column} {$mark} ? " ;
        $this->params[]=$param;
        return $this;
  }

  public function and($column, $mark, $param)
  {
        $this->queryString .= 'AND '. $column . ' ' . $mark . ' ? ';
        $this->params[]=$param;
        return $this;
  }

  public function or($column, $mark, $param)
  {
        $this->queryString .= 'OR '. $column . ' ' . $mark . ' ? ';
        $this->params[]=$param;
        return $this;
  }


  /**
   * DELETE OPERATION
   * with where() etc..
   * @return this
   */
  public function delete()
  {
      $this->queryString = 'DELETE FROM ' . $this->table . ' ';
      return $this;
  }

  /**
   * SELECT constructor
   * using with where()
   * @param  string $columnName
   * @return this
   */
  public function select($columnName = '*')
  {
      $this->queryString = 'SELECT ' . $columnName . ' FROM ' . $this->table . ' ';
      return $this;
  }

  /**
   * OrderBy constructor
   * @param array   for columns name
   * @param order 'asc' 'desc'
   * @return this
   */
  public function orderBy($param = array(),$order='')
  {
      $this->queryString .= ' ORDER BY ' . implode(', ', $param) .' ' .$order .' ';
      return $this;
  }

  /**
   * Limit
   * @param int x 2
   * @return this
   */
  public function limit($m, $n)
  {
      $this->queryString .= ' LIMIT ' . $m .', ' . $n;
      return $this;
  }

  /**
   * Query database, with func where() etc
   * @param  array $param  strings from users, no keys, Values only.
   * @return [type]        [description]
   */
  public function exec($param=[])
  {
      if (!empty($param)) {
        $this->params = array_merge($this->params,$param);
      }
      $this->stmt = self::$pdo->prepare($this->queryString);
      $this->_checkPre();
      //
      //$this->stmt->debugDumpParams();
      //var_dump($this->params);
      //
      $this->stmt ->execute($this->params);
      $this->_checkErr();
      $this->params = [];
      return $this->stmt;
  }

 /**
  * FOR debug...
  */
  public function printSql()
  {
      echo $this->queryString.'<br>';
  }

  /**
   *  run sql directly
   */
  public function runSql($sql) {
      self::$pdo->exec($sql);
      $this->_checkPre();
  }

  protected function _checkErr()
  {
      if($this->stmt->errorCode() !== '00000') {
         self::$ErrorHandler->Edb($this->stmt->errorInfo(),$this->queryString);
      }
  }

  protected function _checkPre()
  {
      if(self::$pdo->errorCode() !=='00000') {
          self::$ErrorHandler->Edb(self::$pdo->errorInfo(),$this->queryString);
      }
  }

  /**
   * Init pdo driver
   */
  public function __construct()
  {
      self::$pdo = call_user_func('\Ugly\\' . self::$config['DB']['DRIVER'] . '::pdo');
      $this->init();//whats this ?
  }

}
