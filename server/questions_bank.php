<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Questions_bank{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $question;
    public $optionA;
    public $optionB;
    public $optionC;
    public $optionD;
    public $optionE;
    public $master_chained;
    public $siblings;
    public $answer;
    public $subject;
    public $exam_type;
    public $question_Image;
    public $scorepoint;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO questions_bank(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->question) && $this->question!=="" ) {
            $sql.= ',question';    
        }
        if (isset($this->optionA) && $this->optionA!=="" ) {
            $sql.= ',optionA';    
        }
        if (isset($this->optionB) && $this->optionB!=="" ) {
            $sql.= ',optionB';    
        }
        if (isset($this->optionC) && $this->optionC!=="" ) {
            $sql.= ',optionC';    
        }
        if (isset($this->optionD) && $this->optionD!=="" ) {
            $sql.= ',optionD';    
        }
        if (isset($this->optionE) && $this->optionE!=="" ) {
            $sql.= ',optionE';    
        }
        if (isset($this->master_chained) && $this->master_chained!=="" ) {
            $sql.= ',master_chained';    
        }
        if (isset($this->siblings) && $this->siblings!=="" ) {
            $sql.= ',siblings';    
        }
        if (isset($this->answer) && $this->answer!=="" ) {
            $sql.= ',answer';    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ',subject';    
        }
        if (isset($this->exam_type) && $this->exam_type!=="" ) {
            $sql.= ',exam_type';    
        }
        if (isset($this->question_Image) && $this->question_Image!=="" ) {
            $sql.= ',question_Image';    
        }
        if (isset($this->scorepoint) && $this->scorepoint!=="" ) {
            $sql.= ',scorepoint';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->question) && $this->question!=="") {
            $sql.=",'{$this->question}'";    
        }
        if (isset($this->optionA) && $this->optionA!=="") {
            $sql.=",'{$this->optionA}'";    
        }
        if (isset($this->optionB) && $this->optionB!=="") {
            $sql.=",'{$this->optionB}'";    
        }
        if (isset($this->optionC) && $this->optionC!=="") {
            $sql.=",'{$this->optionC}'";    
        }
        if (isset($this->optionD) && $this->optionD!=="") {
            $sql.=",'{$this->optionD}'";    
        }
        if (isset($this->optionE) && $this->optionE!=="") {
            $sql.=",'{$this->optionE}'";    
        }
        if (isset($this->master_chained) && $this->master_chained!=="") {
            $sql.=",'{$this->master_chained}'";    
        }
        if (isset($this->siblings) && $this->siblings!=="") {
            $sql.=",'{$this->siblings}'";    
        }
        if (isset($this->answer) && $this->answer!=="") {
            $sql.=",'{$this->answer}'";    
        }
        if (isset($this->subject) && $this->subject!=="") {
            $sql.=",'{$this->subject}'";    
        }
        if (isset($this->exam_type) && $this->exam_type!=="") {
            $sql.=",'{$this->exam_type}'";    
        }
        if (isset($this->question_Image) && $this->question_Image!=="") {
            $sql.=",'{$this->question_Image}'";    
        }
        if (isset($this->scorepoint) && $this->scorepoint!=="") {
            $sql.=",'{$this->scorepoint}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE questions_bank SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->question) && $this->question!=="" ) {
            $sql.= ", question = '{$this->question}'";    
        }
        if (isset($this->optionA) && $this->optionA!=="" ) {
            $sql.= ", optionA = '{$this->optionA}'";    
        }
        if (isset($this->optionB) && $this->optionB!=="" ) {
            $sql.= ", optionB = '{$this->optionB}'";    
        }
        if (isset($this->optionC) && $this->optionC!=="" ) {
            $sql.= ", optionC = '{$this->optionC}'";    
        }
        if (isset($this->optionD) && $this->optionD!=="" ) {
            $sql.= ", optionD = '{$this->optionD}'";    
        }
        if (isset($this->optionE) && $this->optionE!=="" ) {
            $sql.= ", optionE = '{$this->optionE}'";    
        }
        if (isset($this->master_chained) && $this->master_chained!=="" ) {
            $sql.= ", master_chained = '{$this->master_chained}'";    
        }
        if (isset($this->siblings) && $this->siblings!=="" ) {
            $sql.= ", siblings = '{$this->siblings}'";    
        }
        if (isset($this->answer) && $this->answer!=="" ) {
            $sql.= ", answer = '{$this->answer}'";    
        }
        if (isset($this->subject) && $this->subject!=="" ) {
            $sql.= ", subject = '{$this->subject}'";    
        }
        if (isset($this->exam_type) && $this->exam_type!=="" ) {
            $sql.= ", exam_type = '{$this->exam_type}'";    
        }
        if (isset($this->question_Image) && $this->question_Image!=="" ) {
            $sql.= ", question_Image = '{$this->question_Image}'";    
        }
        if (isset($this->scorepoint) && $this->scorepoint!=="" ) {
            $sql.= ", scorepoint = '{$this->scorepoint}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from questions_bank order by id DESC";
        } else {
        $sql = "SELECT * from questions_bank WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM questions_bank WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}