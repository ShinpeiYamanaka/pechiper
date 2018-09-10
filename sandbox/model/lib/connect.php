<?php
class connect {
  //定数の宣言
  const DB_NAME='sandbox';
  const HOST='localhost';
  const UTF='utf8';
  const USER='shinpei';
  const PASS='Shinpei1q1q';
  
  //データベースに接続する関数
  function pdo(){
    /*phpのバージョンが5.3.6よりも古い場合はcharset=".self::UTFが必要無くなり、array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF')が必要になり、5.3.6以上の場合は必要ないがcharset=".self::UTFは必要になる。*/
    $dsn="mysql:dbname=".self::DB_NAME.";host=".self::HOST.";charset=".self::UTF;
    $user=self::USER;
    $pass=self::PASS;
    try{
      $pdo=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.SELF::UTF));
    }catch(Exception $e){
      echo 'error' .$e->getMesseage;
      die();
    }
    //エラーを表示してくれる。
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    return $pdo;
  }
  //SELECT文のときに使用する関数。
  function select($table){
    $sql="SELECT * FROM ".$table;
    $hoge=$this->pdo();
    $stmt=$hoge->query($sql);
    $items=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $items;
  }

  //INSERT文のときに使用する関数。
  function insert($table,$array){
    $stmt = $pdo -> prepare("INSERT INTO :table (id, name, comment) VALUES (:name, :value, :comment)");
    $stmt->bindParam(':table', $table, PDO::PARAM_STR);
    $stmt->bindParam(':name', "test", PDO::PARAM_STR);
    $stmt->bindValue(':comment', "test", PDO::PARAM_INT);
    $stmt->execute();
  }

  //SELECT,INSERT,UPDATE,DELETE文の時に使用する関数。
  function plural($sql,$item){
    $hoge=$this->pdo();
    $stmt=$hoge->prepare($sql);
    $stmt->execute(array(':id'=>$item));//sql文のVALUES等の値が?の場合は$itemでもいい。
    return $stmt;
  }
}
?>