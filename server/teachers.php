<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Teacher{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $employment_id;
    public $name;
    public $gender;
    public $email;
    public $phone_number;
    public $marital_status;
    public $home_address;
    public $qualification;
    public $date_employed;
    public $uonline;
    public $subjects;
    public $status;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO teachers(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->employment_id) && $this->employment_id!=="" ) {
            $sql.= ',employment_id';    
        }
        if (isset($this->name) && $this->name!=="" ) {
            $sql.= ',name';    
        }
        if (isset($this->gender) && $this->gender!=="" ) {
            $sql.= ',gender';    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ',email';    
        }
        if (isset($this->phone_number) && $this->phone_number!=="" ) {
            $sql.= ',phone_number';    
        }
        if (isset($this->marital_status) && $this->marital_status!=="" ) {
            $sql.= ',marital_status';    
        }
        if (isset($this->home_address) && $this->home_address!=="" ) {
            $sql.= ',home_address';    
        }
        if (isset($this->qualification) && $this->qualification!=="" ) {
            $sql.= ',qualification';    
        }
        if (isset($this->date_employed) && $this->date_employed!=="" ) {
            $sql.= ',date_employed';    
        }
        if (isset($this->uonline) && $this->uonline!=="" ) {
            $sql.= ',uonline';    
        }
        if (isset($this->subjects) && $this->subjects!=="" ) {
            $sql.= ',subjects';    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ',status';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->employment_id) && $this->employment_id!=="") {
            $sql.=",'{$this->employment_id}'";    
        }
        if (isset($this->name) && $this->name!=="") {
            $sql.=",'{$this->name}'";    
        }
        if (isset($this->gender) && $this->gender!=="") {
            $sql.=",'{$this->gender}'";    
        }
        if (isset($this->email) && $this->email!=="") {
            $sql.=",'{$this->email}'";    
        }
        if (isset($this->phone_number) && $this->phone_number!=="") {
            $sql.=",'{$this->phone_number}'";    
        }
        if (isset($this->marital_status) && $this->marital_status!=="") {
            $sql.=",'{$this->marital_status}'";    
        }
        if (isset($this->home_address) && $this->home_address!=="") {
            $sql.=",'{$this->home_address}'";    
        }
        if (isset($this->qualification) && $this->qualification!=="") {
            $sql.=",'{$this->qualification}'";    
        }
        if (isset($this->date_employed) && $this->date_employed!=="") {
            $sql.=",'{$this->date_employed}'";    
        }
        if (isset($this->uonline) && $this->uonline!=="") {
            $sql.=",'{$this->uonline}'";    
        }
        if (isset($this->subjects) && $this->subjects!=="") {
            $sql.=",'{$this->subjects}'";    
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
        $sql = "UPDATE teachers SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->employment_id) && $this->employment_id!=="" ) {
            $sql.= ", employment_id = '{$this->employment_id}'";    
        }
        if (isset($this->name) && $this->name!=="" ) {
            $sql.= ", name = '{$this->name}'";    
        }
        if (isset($this->gender) && $this->gender!=="" ) {
            $sql.= ", gender = '{$this->gender}'";    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ", email = '{$this->email}'";    
        }
        if (isset($this->phone_number) && $this->phone_number!=="" ) {
            $sql.= ", phone_number = '{$this->phone_number}'";    
        }
        if (isset($this->marital_status) && $this->marital_status!=="" ) {
            $sql.= ", marital_status = '{$this->marital_status}'";    
        }
        if (isset($this->home_address) && $this->home_address!=="" ) {
            $sql.= ", home_address = '{$this->home_address}'";    
        }
        if (isset($this->qualification) && $this->qualification!=="" ) {
            $sql.= ", qualification = '{$this->qualification}'";    
        }
        if (isset($this->date_employed) && $this->date_employed!=="" ) {
            $sql.= ", date_employed = '{$this->date_employed}'";    
        }
        if (isset($this->uonline) && $this->uonline!=="" ) {
            $sql.= ", uonline = '{$this->uonline}'";    
        }
        if (isset($this->subjects) && $this->subjects!=="" ) {
            $sql.= ", subjects = '{$this->subjects}'";    
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
            $sql = "SELECT * from teachers order by id DESC";
        } else {
        $sql = "SELECT * from teachers WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM teachers WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}