<?php
class DB{

    public $isConnected;
    protected $pdo;

    public function __construct(array $settings){

        $this->isConnected = true;

        try {
            $this->pdo = new PDO($settings['db']['dsn'], $settings['db']['username'], $settings['db']['password'], $settings['option']);
            $this->pdo->exec("set names utf8");
        }
        catch(PDOException $e) {
            $this->isConnected = false;
            throw new Exception($e->getMessage());
        }

    }

    public function Disconnect(){
        $this->pdo = null;
        $this->isConnected = false;
    }

    public function SelectRow($query,$params = array()){
        try{
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    public function SelectRows($query, $params = array()){
        try{
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    public function insertRow($query, $params){
        try{
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($params);
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    public function updateRow($query, $params){
        return $this->insertRow($query, $params);
    }

    public function deleteRow($query, $params){
        return $this->insertRow($query, $params);
    }

    public function dbSet($fields) {
        $set = '';
        $values = array();

        foreach ($fields as $field) {
            $set .= "`$field` = ?,";
            $values[] = $field;
        }

        return rtrim($set, ',');
    }

}