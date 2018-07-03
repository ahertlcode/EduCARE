<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Grades_table{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $upper_limit;
    public $lower_limit;
    public $grade;
    public $status;
    public $id;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO grades_table(";
        if (isset($this->upper_limit) && $this->upper_limit!=="" ) {
             $sql.= 'upper_limit';    
        }
        if (isset($this->lower_limit) && $this->lower_limit!=="" ) {
            $sql.= ',lower_limit';    
        }
        if (isset($this->grade) && $this->grade!=="" ) {
            $sql.= ',grade';    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ',status';    
        }
        if (isset($this->id) && $this->id!=="" ) {
            $sql.= ',id';    
        }
        $sql.= ") VALUES (";
        if (isset($this->upper_limit) && $this->upper_limit!=="") {
            $sql.="'{$this->upper_limit}'";    
        }
        if (isset($this->lower_limit) && $this->lower_limit!=="") {
            $sql.=",'{$this->lower_limit}'";    
        }
        if (isset($this->grade) && $this->grade!=="") {
            $sql.=",'{$this->grade}'";    
        }
        if (isset($this->status) && $this->status!=="") {
            $sql.=",'{$this->status}'";    
        }
        if (isset($this->id) && $this->id!=="") {
            $sql.=",'{$this->id}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE grades_table SET ";
        if (isset($this->upper_limit) && $this->upper_limit!=="" ) {
             $sql.= " upper_limit = '{$this->upper_limit}'";    
        }
        if (isset($this->lower_limit) && $this->lower_limit!=="" ) {
            $sql.= ", lower_limit = '{$this->lower_limit}'";    
        }
        if (isset($this->grade) && $this->grade!=="" ) {
            $sql.= ", grade = '{$this->grade}'";    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ", status = '{$this->status}'";    
        }
        if (isset($this->id) && $this->id!=="" ) {
            $sql.= ", id = '{$this->id}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from grades_table order by id DESC";
        } else {
        $sql = "SELECT * from grades_table WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM grades_table WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}