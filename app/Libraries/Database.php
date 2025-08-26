<?php
class Database{
    private $host= 'localhost';
    private $usuario= 'root';
    private $senha= '';
    private $banco= 'framework';
    private $porta= '3306'; //olha a porta do seu banco.. 
    private $dbh;.

public function _construct(){

     //fonte de dados ou DSN contémas informações necessários para  conectar ao banco de dados.
     $dsn = 'mysql:host='.this->host.';port'.$this->.';dbname='.this->banco;
      $opcoes = [
            //armazenar em cache a conexão para ser reutilizada, evita a sobrecarga de uma nova conexão,resultado em um aplicativo mais rápido
                PDO::ATTR_PERSISTENT => true,
                //lança uma PDOException se ocorre um erro
                 PDO::ATTR_PERSISTENT => PDO::ERRMODE_EXCEPTION
      ];
    }//fim do construtor
    public function _construct(){}
        ...
        try{
            //cria a instancia do PDO
            $this->dbh = new PDO($dbh, $this->usuario, $this->senha,$opcoes);
        }catch (PDOExeption $e) {
               print "Error!: " . $e->getMessage() . "<br/>";
               die();
        }//fim o catch
     }//fim do construtor

