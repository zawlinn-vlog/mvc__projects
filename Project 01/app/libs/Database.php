<?php

class Database {

    private $dbhost = DB_HOST;
    private $dbname = DB_NAME;
    private $dbuser = DB_USER;
    private $dbpass = DB_PASS;

    private $dbh, $stmt;

    public function __construct()
    {
        $str = "mysql:host=". $this-> dbhost. ";dbname=" . $this-> dbname;
        $opt = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($str, $this-> dbuser, $this->dbpass, $opt);

        }catch(Exception $e){
            exit($e->getMessage());
        }
    }

    public function query($qry){
        $this->stmt = $this->dbh->prepare($qry);
    }

    public function bind($param, $val, $type = ''){
        

        switch(empty($type)){


            case is_int($val):
                $type = PDO::PARAM_INT;
                break;
            
            case is_bool($val):
                $type = PDO::PARAM_BOOL;
                break;

            case is_null($val):
                $type = PDO::PARAM_NULL;
                break;

            default:
                $type = PDO::PARAM_STR;
        }


        $this->stmt->bindValue($param, $val, $type);

    }

    public function executedb(){
        $this->stmt->execute();
    }

    public function getAllres(){
        $this->executedb();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
      
    }
}