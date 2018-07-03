<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Class_subject{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $subject;
    public $class;
    public $added_by;
    public $date_added;
    public $status;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO class_subjects(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ',subject';    
        }
        if (isset($this->class) && $this->class!=="" ) {
            $sql.= ',class';    
        }
        if (isset($this->added_by) && $this->added_by!=="" ) {
            $sql.= ',added_by';    
        }
        if (isset($this->date_added) && $this->date_added!=="" ) {
            $sql.= ',date_added';    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ',status';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->subject) && $this->subject!=="") {
            $sql.=",'{$this->subject}'";    
        }
        if (isset($this->class) && $this->class!=="") {
            $sql.=",'{$this->class}'";    
        }
        if (isset($this->added_by) && $this->added_by!=="") {
            $sql.=",'{$this->added_by}'";    
        }
        if (isset($this->date_added) && $this->date_added!=="") {
            $sql.=",'{$this->date_added}'";    
        }
        if (isset($this->status) && $this->status!=="") {
            $sql.=",'{$this->status}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE class_subjects SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ", subject = '{$this->subject}'";    
        }
        if (isset($this->class) && $this->class!=="" ) {
            $sql.= ", class = '{$this->class}'";    
        }
        if (isset($this->added_by) && $this->added_by!=="" ) {
            $sql.= ", added_by = '{$this->added_by}'";    
        }
        if (isset($this->date_added) && $this->date_added!=="" ) {
            $sql.= ", date_added = '{$this->date_added}'";    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ", status = '{$this->status}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from class_subjects order by id DESC";
        } else {
        $sql = "SELECT * from class_subjects WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM class_subjects WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}