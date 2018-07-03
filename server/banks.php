<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Bank{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $bank_name;
    public $bank_code;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO banks(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->bank_name) && $this->bank_name!=="" ) {
            $sql.= ',bank_name';    
        }
        if (isset($this->bank_code) && $this->bank_code!=="" ) {
            $sql.= ',bank_code';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->bank_name) && $this->bank_name!=="") {
            $sql.=",'{$this->bank_name}'";    
        }
        if (isset($this->bank_code) && $this->bank_code!=="") {
            $sql.=",'{$this->bank_code}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE banks SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->bank_name) && $this->bank_name!=="" ) {
            $sql.= ", bank_name = '{$this->bank_name}'";    
        }
        if (isset($this->bank_code) && $this->bank_code!=="" ) {
            $sql.= ", bank_code = '{$this->bank_code}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from banks order by id DESC";
        } else {
        $sql = "SELECT * from banks WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM banks WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}