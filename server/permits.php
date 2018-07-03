<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Permit{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $access;
    public $access_person;
    public $emergence_person;
    public $access_person_phone;
    public $access_person_address;
    public $created_at;
    public $updated_at;
    public $student_id;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO permits(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->access) && $this->access!=="" ) {
            $sql.= ',access';    
        }
        if (isset($this->access_person) && $this->access_person!=="" ) {
            $sql.= ',access_person';    
        }
        if (isset($this->emergence_person) && $this->emergence_person!=="" ) {
            $sql.= ',emergence_person';    
        }
        if (isset($this->access_person_phone) && $this->access_person_phone!=="" ) {
            $sql.= ',access_person_phone';    
        }
        if (isset($this->access_person_address) && $this->access_person_address!=="" ) {
            $sql.= ',access_person_address';    
        }
        if (isset($this->created_at) && $this->created_at!=="" ) {
            $sql.= ',created_at';    
        }
        if (isset($this->updated_at) && $this->updated_at!=="" ) {
            $sql.= ',updated_at';    
        }
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ',student_id';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->access) && $this->access!=="") {
            $sql.=",'{$this->access}'";    
        }
        if (isset($this->access_person) && $this->access_person!=="") {
            $sql.=",'{$this->access_person}'";    
        }
        if (isset($this->emergence_person) && $this->emergence_person!=="") {
            $sql.=",'{$this->emergence_person}'";    
        }
        if (isset($this->access_person_phone) && $this->access_person_phone!=="") {
            $sql.=",'{$this->access_person_phone}'";    
        }
        if (isset($this->access_person_address) && $this->access_person_address!=="") {
            $sql.=",'{$this->access_person_address}'";    
        }
        if (isset($this->created_at) && $this->created_at!=="") {
            $sql.=",'{$this->created_at}'";    
        }
        if (isset($this->updated_at) && $this->updated_at!=="") {
            $sql.=",'{$this->updated_at}'";    
        }
        if (isset($this->student_id) && $this->student_id!=="") {
            $sql.=",'{$this->student_id}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE permits SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->access) && $this->access!=="" ) {
            $sql.= ", access = '{$this->access}'";    
        }
        if (isset($this->access_person) && $this->access_person!=="" ) {
            $sql.= ", access_person = '{$this->access_person}'";    
        }
        if (isset($this->emergence_person) && $this->emergence_person!=="" ) {
            $sql.= ", emergence_person = '{$this->emergence_person}'";    
        }
        if (isset($this->access_person_phone) && $this->access_person_phone!=="" ) {
            $sql.= ", access_person_phone = '{$this->access_person_phone}'";    
        }
        if (isset($this->access_person_address) && $this->access_person_address!=="" ) {
            $sql.= ", access_person_address = '{$this->access_person_address}'";    
        }
        if (isset($this->created_at) && $this->created_at!=="" ) {
            $sql.= ", created_at = '{$this->created_at}'";    
        }
        if (isset($this->updated_at) && $this->updated_at!=="" ) {
            $sql.= ", updated_at = '{$this->updated_at}'";    
        }
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ", student_id = '{$this->student_id}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from permits order by id DESC";
        } else {
        $sql = "SELECT * from permits WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM permits WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}