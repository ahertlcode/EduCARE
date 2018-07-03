<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class User{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $email;
    public $user_type;
    public $password;
    public $registered_date;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO users(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ',email';    
        }
        if (isset($this->user_type) && $this->user_type!=="" ) {
            $sql.= ',user_type';    
        }
        if (isset($this->password) && $this->password!=="" ) {
            $sql.= ',password';    
        }
        if (isset($this->registered_date) && $this->registered_date!=="" ) {
            $sql.= ',registered_date';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->email) && $this->email!=="") {
            $sql.=",'{$this->email}'";    
        }
        if (isset($this->user_type) && $this->user_type!=="") {
            $sql.=",'{$this->user_type}'";    
        }
        if (isset($this->password) && $this->password!=="") {
            $sql.=",'{$this->password}'";    
        }
        if (isset($this->registered_date) && $this->registered_date!=="") {
            $sql.=",'{$this->registered_date}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE users SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ", email = '{$this->email}'";    
        }
        if (isset($this->user_type) && $this->user_type!=="" ) {
            $sql.= ", user_type = '{$this->user_type}'";    
        }
        if (isset($this->password) && $this->password!=="" ) {
            $sql.= ", password = '{$this->password}'";    
        }
        if (isset($this->registered_date) && $this->registered_date!=="" ) {
            $sql.= ", registered_date = '{$this->registered_date}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from users order by id DESC";
        } else {
        $sql = "SELECT * from users WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM users WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}