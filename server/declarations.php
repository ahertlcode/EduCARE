<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Declaration{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $applicant_declaration;
    public $declaration_date;
    public $parent_declaration;
    public $parent_declaration_date;
    public $parent_consent;
    public $created_at;
    public $updated_at;
    public $student_id;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO declarations(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->applicant_declaration) && $this->applicant_declaration!=="" ) {
            $sql.= ',applicant_declaration';    
        }
        if (isset($this->declaration_date) && $this->declaration_date!=="" ) {
            $sql.= ',declaration_date';    
        }
        if (isset($this->parent_declaration) && $this->parent_declaration!=="" ) {
            $sql.= ',parent_declaration';    
        }
        if (isset($this->parent_declaration_date) && $this->parent_declaration_date!=="" ) {
            $sql.= ',parent_declaration_date';    
        }
        if (isset($this->parent_consent) && $this->parent_consent!=="" ) {
            $sql.= ',parent_consent';    
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
        if (isset($this->applicant_declaration) && $this->applicant_declaration!=="") {
            $sql.=",'{$this->applicant_declaration}'";    
        }
        if (isset($this->declaration_date) && $this->declaration_date!=="") {
            $sql.=",'{$this->declaration_date}'";    
        }
        if (isset($this->parent_declaration) && $this->parent_declaration!=="") {
            $sql.=",'{$this->parent_declaration}'";    
        }
        if (isset($this->parent_declaration_date) && $this->parent_declaration_date!=="") {
            $sql.=",'{$this->parent_declaration_date}'";    
        }
        if (isset($this->parent_consent) && $this->parent_consent!=="") {
            $sql.=",'{$this->parent_consent}'";    
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
        $sql = "UPDATE declarations SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->applicant_declaration) && $this->applicant_declaration!=="" ) {
            $sql.= ", applicant_declaration = '{$this->applicant_declaration}'";    
        }
        if (isset($this->declaration_date) && $this->declaration_date!=="" ) {
            $sql.= ", declaration_date = '{$this->declaration_date}'";    
        }
        if (isset($this->parent_declaration) && $this->parent_declaration!=="" ) {
            $sql.= ", parent_declaration = '{$this->parent_declaration}'";    
        }
        if (isset($this->parent_declaration_date) && $this->parent_declaration_date!=="" ) {
            $sql.= ", parent_declaration_date = '{$this->parent_declaration_date}'";    
        }
        if (isset($this->parent_consent) && $this->parent_consent!=="" ) {
            $sql.= ", parent_consent = '{$this->parent_consent}'";    
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
            $sql = "SELECT * from declarations order by id DESC";
        } else {
        $sql = "SELECT * from declarations WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM declarations WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}