<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Primary_second_term_report{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $student_id;
    public $Term;
    public $Session;
    public $Class;
    public $first_test;
    public $mid_test;
    public $total_test;
    public $Exam;
    public $subject;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO primary_second_term_reports(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ',student_id';    
        }
        if (isset($this->Term) && $this->Term!=="" ) {
            $sql.= ',Term';    
        }
        if (isset($this->Session) && $this->Session!=="" ) {
            $sql.= ',Session';    
        }
        if (isset($this->Class) && $this->Class!=="" ) {
            $sql.= ',Class';    
        }
        if (isset($this->first_test) && $this->first_test!=="" ) {
            $sql.= ',first_test';    
        }
        if (isset($this->mid_test) && $this->mid_test!=="" ) {
            $sql.= ',mid_test';    
        }
        if (isset($this->total_test) && $this->total_test!=="" ) {
            $sql.= ',total_test';    
        }
        if (isset($this->Exam) && $this->Exam!=="" ) {
            $sql.= ',Exam';    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ',subject';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->student_id) && $this->student_id!=="") {
            $sql.=",'{$this->student_id}'";    
        }
        if (isset($this->Term) && $this->Term!=="") {
            $sql.=",'{$this->Term}'";    
        }
        if (isset($this->Session) && $this->Session!=="") {
            $sql.=",'{$this->Session}'";    
        }
        if (isset($this->Class) && $this->Class!=="") {
            $sql.=",'{$this->Class}'";    
        }
        if (isset($this->first_test) && $this->first_test!=="") {
            $sql.=",'{$this->first_test}'";    
        }
        if (isset($this->mid_test) && $this->mid_test!=="") {
            $sql.=",'{$this->mid_test}'";    
        }
        if (isset($this->total_test) && $this->total_test!=="") {
            $sql.=",'{$this->total_test}'";    
        }
        if (isset($this->Exam) && $this->Exam!=="") {
            $sql.=",'{$this->Exam}'";    
        }
        if (isset($this->subject) && $this->subject!=="") {
            $sql.=",'{$this->subject}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE primary_second_term_reports SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ", student_id = '{$this->student_id}'";    
        }
        if (isset($this->Term) && $this->Term!=="" ) {
            $sql.= ", Term = '{$this->Term}'";    
        }
        if (isset($this->Session) && $this->Session!=="" ) {
            $sql.= ", Session = '{$this->Session}'";    
        }
        if (isset($this->Class) && $this->Class!=="" ) {
            $sql.= ", Class = '{$this->Class}'";    
        }
        if (isset($this->first_test) && $this->first_test!=="" ) {
            $sql.= ", first_test = '{$this->first_test}'";    
        }
        if (isset($this->mid_test) && $this->mid_test!=="" ) {
            $sql.= ", mid_test = '{$this->mid_test}'";    
        }
        if (isset($this->total_test) && $this->total_test!=="" ) {
            $sql.= ", total_test = '{$this->total_test}'";    
        }
        if (isset($this->Exam) && $this->Exam!=="" ) {
            $sql.= ", Exam = '{$this->Exam}'";    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ", subject = '{$this->subject}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from primary_second_term_reports order by id DESC";
        } else {
        $sql = "SELECT * from primary_second_term_reports WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM primary_second_term_reports WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}