<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Medical{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $applNo;
    public $applVulDis;
    public $applBldGrp;
    public $applGenoType;
    public $applDocVisit;
    public $applIllType;
    public $applAllergies;
    public $applSpecialNeed;
    public $faDoctorName;
    public $faDoctorAddr;
    public $faDoctorPhone;
    public $applMedicalReport;
    public $created_at;
    public $updated_at;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO medicals(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->applNo) && $this->applNo!=="" ) {
            $sql.= ',applNo';    
        }
        if (isset($this->applVulDis) && $this->applVulDis!=="" ) {
            $sql.= ',applVulDis';    
        }
        if (isset($this->applBldGrp) && $this->applBldGrp!=="" ) {
            $sql.= ',applBldGrp';    
        }
        if (isset($this->applGenoType) && $this->applGenoType!=="" ) {
            $sql.= ',applGenoType';    
        }
        if (isset($this->applDocVisit) && $this->applDocVisit!=="" ) {
            $sql.= ',applDocVisit';    
        }
        if (isset($this->applIllType) && $this->applIllType!=="" ) {
            $sql.= ',applIllType';    
        }
        if (isset($this->applAllergies) && $this->applAllergies!=="" ) {
            $sql.= ',applAllergies';    
        }
        if (isset($this->applSpecialNeed) && $this->applSpecialNeed!=="" ) {
            $sql.= ',applSpecialNeed';    
        }
        if (isset($this->faDoctorName) && $this->faDoctorName!=="" ) {
            $sql.= ',faDoctorName';    
        }
        if (isset($this->faDoctorAddr) && $this->faDoctorAddr!=="" ) {
            $sql.= ',faDoctorAddr';    
        }
        if (isset($this->faDoctorPhone) && $this->faDoctorPhone!=="" ) {
            $sql.= ',faDoctorPhone';    
        }
        if (isset($this->applMedicalReport) && $this->applMedicalReport!=="" ) {
            $sql.= ',applMedicalReport';    
        }
        if (isset($this->created_at) && $this->created_at!=="" ) {
            $sql.= ',created_at';    
        }
        if (isset($this->updated_at) && $this->updated_at!=="" ) {
            $sql.= ',updated_at';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->applNo) && $this->applNo!=="") {
            $sql.=",'{$this->applNo}'";    
        }
        if (isset($this->applVulDis) && $this->applVulDis!=="") {
            $sql.=",'{$this->applVulDis}'";    
        }
        if (isset($this->applBldGrp) && $this->applBldGrp!=="") {
            $sql.=",'{$this->applBldGrp}'";    
        }
        if (isset($this->applGenoType) && $this->applGenoType!=="") {
            $sql.=",'{$this->applGenoType}'";    
        }
        if (isset($this->applDocVisit) && $this->applDocVisit!=="") {
            $sql.=",'{$this->applDocVisit}'";    
        }
        if (isset($this->applIllType) && $this->applIllType!=="") {
            $sql.=",'{$this->applIllType}'";    
        }
        if (isset($this->applAllergies) && $this->applAllergies!=="") {
            $sql.=",'{$this->applAllergies}'";    
        }
        if (isset($this->applSpecialNeed) && $this->applSpecialNeed!=="") {
            $sql.=",'{$this->applSpecialNeed}'";    
        }
        if (isset($this->faDoctorName) && $this->faDoctorName!=="") {
            $sql.=",'{$this->faDoctorName}'";    
        }
        if (isset($this->faDoctorAddr) && $this->faDoctorAddr!=="") {
            $sql.=",'{$this->faDoctorAddr}'";    
        }
        if (isset($this->faDoctorPhone) && $this->faDoctorPhone!=="") {
            $sql.=",'{$this->faDoctorPhone}'";    
        }
        if (isset($this->applMedicalReport) && $this->applMedicalReport!=="") {
            $sql.=",'{$this->applMedicalReport}'";    
        }
        if (isset($this->created_at) && $this->created_at!=="") {
            $sql.=",'{$this->created_at}'";    
        }
        if (isset($this->updated_at) && $this->updated_at!=="") {
            $sql.=",'{$this->updated_at}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE medicals SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->applNo) && $this->applNo!=="" ) {
            $sql.= ", applNo = '{$this->applNo}'";    
        }
        if (isset($this->applVulDis) && $this->applVulDis!=="" ) {
            $sql.= ", applVulDis = '{$this->applVulDis}'";    
        }
        if (isset($this->applBldGrp) && $this->applBldGrp!=="" ) {
            $sql.= ", applBldGrp = '{$this->applBldGrp}'";    
        }
        if (isset($this->applGenoType) && $this->applGenoType!=="" ) {
            $sql.= ", applGenoType = '{$this->applGenoType}'";    
        }
        if (isset($this->applDocVisit) && $this->applDocVisit!=="" ) {
            $sql.= ", applDocVisit = '{$this->applDocVisit}'";    
        }
        if (isset($this->applIllType) && $this->applIllType!=="" ) {
            $sql.= ", applIllType = '{$this->applIllType}'";    
        }
        if (isset($this->applAllergies) && $this->applAllergies!=="" ) {
            $sql.= ", applAllergies = '{$this->applAllergies}'";    
        }
        if (isset($this->applSpecialNeed) && $this->applSpecialNeed!=="" ) {
            $sql.= ", applSpecialNeed = '{$this->applSpecialNeed}'";    
        }
        if (isset($this->faDoctorName) && $this->faDoctorName!=="" ) {
            $sql.= ", faDoctorName = '{$this->faDoctorName}'";    
        }
        if (isset($this->faDoctorAddr) && $this->faDoctorAddr!=="" ) {
            $sql.= ", faDoctorAddr = '{$this->faDoctorAddr}'";    
        }
        if (isset($this->faDoctorPhone) && $this->faDoctorPhone!=="" ) {
            $sql.= ", faDoctorPhone = '{$this->faDoctorPhone}'";    
        }
        if (isset($this->applMedicalReport) && $this->applMedicalReport!=="" ) {
            $sql.= ", applMedicalReport = '{$this->applMedicalReport}'";    
        }
        if (isset($this->created_at) && $this->created_at!=="" ) {
            $sql.= ", created_at = '{$this->created_at}'";    
        }
        if (isset($this->updated_at) && $this->updated_at!=="" ) {
            $sql.= ", updated_at = '{$this->updated_at}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from medicals order by id DESC";
        } else {
        $sql = "SELECT * from medicals WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM medicals WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}