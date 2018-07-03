<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Exam_setup{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $exam_type;
    public $questions;
    public $examiner;
    public $time_allowed;
    public $subject;
    public $status;
    public $test_name;
    public $created_at;
    public $class_of_student;
    public $educareucls;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO exam_setups(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->exam_type) && $this->exam_type!=="" ) {
            $sql.= ',exam_type';    
        }
        if (isset($this->questions) && $this->questions!=="" ) {
            $sql.= ',questions';    
        }
        if (isset($this->examiner) && $this->examiner!=="" ) {
            $sql.= ',examiner';    
        }
        if (isset($this->time_allowed) && $this->time_allowed!=="" ) {
            $sql.= ',time_allowed';    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ',subject';    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ',status';    
        }
        if (isset($this->test_name) && $this->test_name!=="" ) {
            $sql.= ',test_name';    
        }
        if (isset($this->created_at) && $this->created_at!=="" ) {
            $sql.= ',created_at';    
        }
        if (isset($this->class_of_student) && $this->class_of_student!=="" ) {
            $sql.= ',class_of_student';    
        }
        if (isset($this->educareucls) && $this->educareucls!=="" ) {
            $sql.= ',educareucls';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->exam_type) && $this->exam_type!=="") {
            $sql.=",'{$this->exam_type}'";    
        }
        if (isset($this->questions) && $this->questions!=="") {
            $sql.=",'{$this->questions}'";    
        }
        if (isset($this->examiner) && $this->examiner!=="") {
            $sql.=",'{$this->examiner}'";    
        }
        if (isset($this->time_allowed) && $this->time_allowed!=="") {
            $sql.=",'{$this->time_allowed}'";    
        }
        if (isset($this->subject) && $this->subject!=="") {
            $sql.=",'{$this->subject}'";    
        }
        if (isset($this->status) && $this->status!=="") {
            $sql.=",'{$this->status}'";    
        }
        if (isset($this->test_name) && $this->test_name!=="") {
            $sql.=",'{$this->test_name}'";    
        }
        if (isset($this->created_at) && $this->created_at!=="") {
            $sql.=",'{$this->created_at}'";    
        }
        if (isset($this->class_of_student) && $this->class_of_student!=="") {
            $sql.=",'{$this->class_of_student}'";    
        }
        if (isset($this->educareucls) && $this->educareucls!=="") {
            $sql.=",'{$this->educareucls}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE exam_setups SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->exam_type) && $this->exam_type!=="" ) {
            $sql.= ", exam_type = '{$this->exam_type}'";    
        }
        if (isset($this->questions) && $this->questions!=="" ) {
            $sql.= ", questions = '{$this->questions}'";    
        }
        if (isset($this->examiner) && $this->examiner!=="" ) {
            $sql.= ", examiner = '{$this->examiner}'";    
        }
        if (isset($this->time_allowed) && $this->time_allowed!=="" ) {
            $sql.= ", time_allowed = '{$this->time_allowed}'";    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ", subject = '{$this->subject}'";    
        }
        if (isset($this->status) && $this->status!=="" ) {
            $sql.= ", status = '{$this->status}'";    
        }
        if (isset($this->test_name) && $this->test_name!=="" ) {
            $sql.= ", test_name = '{$this->test_name}'";    
        }
        if (isset($this->created_at) && $this->created_at!=="" ) {
            $sql.= ", created_at = '{$this->created_at}'";    
        }
        if (isset($this->class_of_student) && $this->class_of_student!=="" ) {
            $sql.= ", class_of_student = '{$this->class_of_student}'";    
        }
        if (isset($this->educareucls) && $this->educareucls!=="" ) {
            $sql.= ", educareucls = '{$this->educareucls}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from exam_setups order by id DESC";
        } else {
        $sql = "SELECT * from exam_setups WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM exam_setups WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}