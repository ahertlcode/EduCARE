<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Results_control{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $session;
    public $term;
    public $class;
    public $class_teacher;
    public $keystr;
    public $resul_tdate;
    public $status;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO results_control(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->session) && $this->session!=="" ) {
            $sql.= ',session';    
        }
        if (isset($this->term) && $this->term!=="" ) {
            $sql.= ',term';    
        }
        if (isset($this->class) && $this->class!=="" ) {
            $sql.= ',class';    
        }
        if (isset($this->class_teacher) && $this->class_teacher!=="" ) {
            $sql.= ',class_teacher';    
        }
        if (isset($this->keystr) && $this->keystr!=="" ) {
            $sql.= ',keystr';    
        }
        if (isset($this->resul_tdate) && $this->resul_tdate!=="" ) {
            $sql.= ',resul_tdate';    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ',status';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->session) && $this->session!=="") {
            $sql.=",'{$this->session}'";    
        }
        if (isset($this->term) && $this->term!=="") {
            $sql.=",'{$this->term}'";    
        }
        if (isset($this->class) && $this->class!=="") {
            $sql.=",'{$this->class}'";    
        }
        if (isset($this->class_teacher) && $this->class_teacher!=="") {
            $sql.=",'{$this->class_teacher}'";    
        }
        if (isset($this->keystr) && $this->keystr!=="") {
            $sql.=",'{$this->keystr}'";    
        }
        if (isset($this->resul_tdate) && $this->resul_tdate!=="") {
            $sql.=",'{$this->resul_tdate}'";    
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
        $sql = "UPDATE results_control SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->session) && $this->session!=="" ) {
            $sql.= ", session = '{$this->session}'";    
        }
        if (isset($this->term) && $this->term!=="" ) {
            $sql.= ", term = '{$this->term}'";    
        }
        if (isset($this->class) && $this->class!=="" ) {
            $sql.= ", class = '{$this->class}'";    
        }
        if (isset($this->class_teacher) && $this->class_teacher!=="" ) {
            $sql.= ", class_teacher = '{$this->class_teacher}'";    
        }
        if (isset($this->keystr) && $this->keystr!=="" ) {
            $sql.= ", keystr = '{$this->keystr}'";    
        }
        if (isset($this->resul_tdate) && $this->resul_tdate!=="" ) {
            $sql.= ", resul_tdate = '{$this->resul_tdate}'";    
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
            $sql = "SELECT * from results_control order by id DESC";
        } else {
        $sql = "SELECT * from results_control WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM results_control WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}