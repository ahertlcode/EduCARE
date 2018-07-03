<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Parents_table{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $father_name;
    public $father_Work;
    public $father_Phone;
    public $father_Email;
    public $father_Home_Address;
    public $father_Postal_Address;
    public $mother_Name;
    public $mother_Work;
    public $mother_Phone;
    public $mother_Email;
    public $mother_Home_Address;
    public $moPostAddr;
    public $reffered;
    public $ref;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO parents_table(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->father_name) && $this->father_name!=="" ) {
            $sql.= ',father_name';    
        }
        if (isset($this->father_Work) && $this->father_Work!=="" ) {
            $sql.= ',father_Work';    
        }
        if (isset($this->father_Phone) && $this->father_Phone!=="" ) {
            $sql.= ',father_Phone';    
        }
        if (isset($this->father_Email) && $this->father_Email!=="" ) {
            $sql.= ',father_Email';    
        }
        if (isset($this->father_Home_Address) && $this->father_Home_Address!=="" ) {
            $sql.= ',father_Home_Address';    
        }
        if (isset($this->father_Postal_Address) && $this->father_Postal_Address!=="" ) {
            $sql.= ',father_Postal_Address';    
        }
        if (isset($this->mother_Name) && $this->mother_Name!=="" ) {
            $sql.= ',mother_Name';    
        }
        if (isset($this->mother_Work) && $this->mother_Work!=="" ) {
            $sql.= ',mother_Work';    
        }
        if (isset($this->mother_Phone) && $this->mother_Phone!=="" ) {
            $sql.= ',mother_Phone';    
        }
        if (isset($this->mother_Email) && $this->mother_Email!=="" ) {
            $sql.= ',mother_Email';    
        }
        if (isset($this->mother_Home_Address) && $this->mother_Home_Address!=="" ) {
            $sql.= ',mother_Home_Address';    
        }
        if (isset($this->moPostAddr) && $this->moPostAddr!=="" ) {
            $sql.= ',moPostAddr';    
        }
        if (isset($this->reffered) && $this->reffered!=="" ) {
            $sql.= ',reffered';    
        }
        if (isset($this->ref) && $this->ref!=="" ) {
            $sql.= ',ref';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->father_name) && $this->father_name!=="") {
            $sql.=",'{$this->father_name}'";    
        }
        if (isset($this->father_Work) && $this->father_Work!=="") {
            $sql.=",'{$this->father_Work}'";    
        }
        if (isset($this->father_Phone) && $this->father_Phone!=="") {
            $sql.=",'{$this->father_Phone}'";    
        }
        if (isset($this->father_Email) && $this->father_Email!=="") {
            $sql.=",'{$this->father_Email}'";    
        }
        if (isset($this->father_Home_Address) && $this->father_Home_Address!=="") {
            $sql.=",'{$this->father_Home_Address}'";    
        }
        if (isset($this->father_Postal_Address) && $this->father_Postal_Address!=="") {
            $sql.=",'{$this->father_Postal_Address}'";    
        }
        if (isset($this->mother_Name) && $this->mother_Name!=="") {
            $sql.=",'{$this->mother_Name}'";    
        }
        if (isset($this->mother_Work) && $this->mother_Work!=="") {
            $sql.=",'{$this->mother_Work}'";    
        }
        if (isset($this->mother_Phone) && $this->mother_Phone!=="") {
            $sql.=",'{$this->mother_Phone}'";    
        }
        if (isset($this->mother_Email) && $this->mother_Email!=="") {
            $sql.=",'{$this->mother_Email}'";    
        }
        if (isset($this->mother_Home_Address) && $this->mother_Home_Address!=="") {
            $sql.=",'{$this->mother_Home_Address}'";    
        }
        if (isset($this->moPostAddr) && $this->moPostAddr!=="") {
            $sql.=",'{$this->moPostAddr}'";    
        }
        if (isset($this->reffered) && $this->reffered!=="") {
            $sql.=",'{$this->reffered}'";    
        }
        if (isset($this->ref) && $this->ref!=="") {
            $sql.=",'{$this->ref}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE parents_table SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->father_name) && $this->father_name!=="" ) {
            $sql.= ", father_name = '{$this->father_name}'";    
        }
        if (isset($this->father_Work) && $this->father_Work!=="" ) {
            $sql.= ", father_Work = '{$this->father_Work}'";    
        }
        if (isset($this->father_Phone) && $this->father_Phone!=="" ) {
            $sql.= ", father_Phone = '{$this->father_Phone}'";    
        }
        if (isset($this->father_Email) && $this->father_Email!=="" ) {
            $sql.= ", father_Email = '{$this->father_Email}'";    
        }
        if (isset($this->father_Home_Address) && $this->father_Home_Address!=="" ) {
            $sql.= ", father_Home_Address = '{$this->father_Home_Address}'";    
        }
        if (isset($this->father_Postal_Address) && $this->father_Postal_Address!=="" ) {
            $sql.= ", father_Postal_Address = '{$this->father_Postal_Address}'";    
        }
        if (isset($this->mother_Name) && $this->mother_Name!=="" ) {
            $sql.= ", mother_Name = '{$this->mother_Name}'";    
        }
        if (isset($this->mother_Work) && $this->mother_Work!=="" ) {
            $sql.= ", mother_Work = '{$this->mother_Work}'";    
        }
        if (isset($this->mother_Phone) && $this->mother_Phone!=="" ) {
            $sql.= ", mother_Phone = '{$this->mother_Phone}'";    
        }
        if (isset($this->mother_Email) && $this->mother_Email!=="" ) {
            $sql.= ", mother_Email = '{$this->mother_Email}'";    
        }
        if (isset($this->mother_Home_Address) && $this->mother_Home_Address!=="" ) {
            $sql.= ", mother_Home_Address = '{$this->mother_Home_Address}'";    
        }
        if (isset($this->moPostAddr) && $this->moPostAddr!=="" ) {
            $sql.= ", moPostAddr = '{$this->moPostAddr}'";    
        }
        if (isset($this->reffered) && $this->reffered!=="" ) {
            $sql.= ", reffered = '{$this->reffered}'";    
        }
        if (isset($this->ref) && $this->ref!=="" ) {
            $sql.= ", ref = '{$this->ref}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from parents_table order by id DESC";
        } else {
        $sql = "SELECT * from parents_table WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM parents_table WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}