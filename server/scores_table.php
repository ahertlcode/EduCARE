<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Scores_table{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $session;
    public $term;
    public $class;
    public $student_id;
    public $subject;
    public $CAT;
    public $EXAM;
    public $GRADE;
    public $TOTAL;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO scores_table(";
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
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ',student_id';    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ',subject';    
        }
        if (isset($this->CAT) && $this->CAT!=="" ) {
            $sql.= ',CAT';    
        }
        if (isset($this->EXAM) && $this->EXAM!=="" ) {
            $sql.= ',EXAM';    
        }
        if (isset($this->GRADE) && $this->GRADE!=="" ) {
            $sql.= ',GRADE';    
        }
        if (isset($this->TOTAL) && $this->TOTAL!=="" ) {
            $sql.= ',TOTAL';    
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
        if (isset($this->student_id) && $this->student_id!=="") {
            $sql.=",'{$this->student_id}'";    
        }
        if (isset($this->subject) && $this->subject!=="") {
            $sql.=",'{$this->subject}'";    
        }
        if (isset($this->CAT) && $this->CAT!=="") {
            $sql.=",'{$this->CAT}'";    
        }
        if (isset($this->EXAM) && $this->EXAM!=="") {
            $sql.=",'{$this->EXAM}'";    
        }
        if (isset($this->GRADE) && $this->GRADE!=="") {
            $sql.=",'{$this->GRADE}'";    
        }
        if (isset($this->TOTAL) && $this->TOTAL!=="") {
            $sql.=",'{$this->TOTAL}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE scores_table SET ";
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
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ", student_id = '{$this->student_id}'";    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ", subject = '{$this->subject}'";    
        }
        if (isset($this->CAT) && $this->CAT!=="" ) {
            $sql.= ", CAT = '{$this->CAT}'";    
        }
        if (isset($this->EXAM) && $this->EXAM!=="" ) {
            $sql.= ", EXAM = '{$this->EXAM}'";    
        }
        if (isset($this->GRADE) && $this->GRADE!=="" ) {
            $sql.= ", GRADE = '{$this->GRADE}'";    
        }
        if (isset($this->TOTAL) && $this->TOTAL!=="" ) {
            $sql.= ", TOTAL = '{$this->TOTAL}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from scores_table order by id DESC";
        } else {
        $sql = "SELECT * from scores_table WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM scores_table WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}