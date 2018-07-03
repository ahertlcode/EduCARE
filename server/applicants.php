<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Applicant{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $application_Number;
    public $full_name;
    public $email;
    public $phone;
    public $application_fee;
    public $passport_photograph;
    public $date_of_birth;
    public $gender;
    public $nationality;
    public $state_of_origin;
    public $religion;
    public $present_class;
    public $class_seeking_admission_to;
    public $home_address;
    public $previous_school;
    public $certificate_obtained;
    public $skills;
    public $other_information;
    public $clergy_attestation;
    public $birth_certificate;
    public $test_score;
    public $parent_id;
    public $completed;
    public $created_at;
    public $updated_at;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO applicants(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->application_Number) && $this->application_Number!=="" ) {
            $sql.= ',application_Number';    
        }
        if (isset($this->full_name) && $this->full_name!=="" ) {
            $sql.= ',full_name';    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ',email';    
        }
        if (isset($this->phone) && $this->phone!=="" ) {
            $sql.= ',phone';    
        }
        if (isset($this->application_fee) && $this->application_fee!=="" ) {
            $sql.= ',application_fee';    
        }
        if (isset($this->passport_photograph) && $this->passport_photograph!=="" ) {
            $sql.= ',passport_photograph';    
        }
        if (isset($this->date_of_birth) && $this->date_of_birth!=="" ) {
            $sql.= ',date_of_birth';    
        }
        if (isset($this->gender) && $this->gender!=="" ) {
            $sql.= ',gender';    
        }
        if (isset($this->nationality) && $this->nationality!=="" ) {
            $sql.= ',nationality';    
        }
        if (isset($this->state_of_origin) && $this->state_of_origin!=="" ) {
            $sql.= ',state_of_origin';    
        }
        if (isset($this->religion) && $this->religion!=="" ) {
            $sql.= ',religion';    
        }
        if (isset($this->present_class) && $this->present_class!=="" ) {
            $sql.= ',present_class';    
        }
        if (isset($this->class_seeking_admission_to) && $this->class_seeking_admission_to!=="" ) {
            $sql.= ',class_seeking_admission_to';    
        }
        if (isset($this->home_address) && $this->home_address!=="" ) {
            $sql.= ',home_address';    
        }
        if (isset($this->previous_school) && $this->previous_school!=="" ) {
            $sql.= ',previous_school';    
        }
        if (isset($this->certificate_obtained) && $this->certificate_obtained!=="" ) {
            $sql.= ',certificate_obtained';    
        }
        if (isset($this->skills) && $this->skills!=="" ) {
            $sql.= ',skills';    
        }
        if (isset($this->other_information) && $this->other_information!=="" ) {
            $sql.= ',other_information';    
        }
        if (isset($this->clergy_attestation) && $this->clergy_attestation!=="" ) {
            $sql.= ',clergy_attestation';    
        }
        if (isset($this->birth_certificate) && $this->birth_certificate!=="" ) {
            $sql.= ',birth_certificate';    
        }
        if (isset($this->test_score) && $this->test_score!=="" ) {
            $sql.= ',test_score';    
        }
        if (isset($this->parent_id) && $this->parent_id!=="" ) {
            $sql.= ',parent_id';    
        }
        if (isset($this->completed) && $this->completed!=="" ) {
            $sql.= ',completed';    
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
        if (isset($this->application_Number) && $this->application_Number!=="") {
            $sql.=",'{$this->application_Number}'";    
        }
        if (isset($this->full_name) && $this->full_name!=="") {
            $sql.=",'{$this->full_name}'";    
        }
        if (isset($this->email) && $this->email!=="") {
            $sql.=",'{$this->email}'";    
        }
        if (isset($this->phone) && $this->phone!=="") {
            $sql.=",'{$this->phone}'";    
        }
        if (isset($this->application_fee) && $this->application_fee!=="") {
            $sql.=",'{$this->application_fee}'";    
        }
        if (isset($this->passport_photograph) && $this->passport_photograph!=="") {
            $sql.=",'{$this->passport_photograph}'";    
        }
        if (isset($this->date_of_birth) && $this->date_of_birth!=="") {
            $sql.=",'{$this->date_of_birth}'";    
        }
        if (isset($this->gender) && $this->gender!=="") {
            $sql.=",'{$this->gender}'";    
        }
        if (isset($this->nationality) && $this->nationality!=="") {
            $sql.=",'{$this->nationality}'";    
        }
        if (isset($this->state_of_origin) && $this->state_of_origin!=="") {
            $sql.=",'{$this->state_of_origin}'";    
        }
        if (isset($this->religion) && $this->religion!=="") {
            $sql.=",'{$this->religion}'";    
        }
        if (isset($this->present_class) && $this->present_class!=="") {
            $sql.=",'{$this->present_class}'";    
        }
        if (isset($this->class_seeking_admission_to) && $this->class_seeking_admission_to!=="") {
            $sql.=",'{$this->class_seeking_admission_to}'";    
        }
        if (isset($this->home_address) && $this->home_address!=="") {
            $sql.=",'{$this->home_address}'";    
        }
        if (isset($this->previous_school) && $this->previous_school!=="") {
            $sql.=",'{$this->previous_school}'";    
        }
        if (isset($this->certificate_obtained) && $this->certificate_obtained!=="") {
            $sql.=",'{$this->certificate_obtained}'";    
        }
        if (isset($this->skills) && $this->skills!=="") {
            $sql.=",'{$this->skills}'";    
        }
        if (isset($this->other_information) && $this->other_information!=="") {
            $sql.=",'{$this->other_information}'";    
        }
        if (isset($this->clergy_attestation) && $this->clergy_attestation!=="") {
            $sql.=",'{$this->clergy_attestation}'";    
        }
        if (isset($this->birth_certificate) && $this->birth_certificate!=="") {
            $sql.=",'{$this->birth_certificate}'";    
        }
        if (isset($this->test_score) && $this->test_score!=="") {
            $sql.=",'{$this->test_score}'";    
        }
        if (isset($this->parent_id) && $this->parent_id!=="") {
            $sql.=",'{$this->parent_id}'";    
        }
        if (isset($this->completed) && $this->completed!=="") {
            $sql.=",'{$this->completed}'";    
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
        $sql = "UPDATE applicants SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->application_Number) && $this->application_Number!=="" ) {
            $sql.= ", application_Number = '{$this->application_Number}'";    
        }
        if (isset($this->full_name) && $this->full_name!=="" ) {
            $sql.= ", full_name = '{$this->full_name}'";    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ", email = '{$this->email}'";    
        }
        if (isset($this->phone) && $this->phone!=="" ) {
            $sql.= ", phone = '{$this->phone}'";    
        }
        if (isset($this->application_fee) && $this->application_fee!=="" ) {
            $sql.= ", application_fee = '{$this->application_fee}'";    
        }
        if (isset($this->passport_photograph) && $this->passport_photograph!=="" ) {
            $sql.= ", passport_photograph = '{$this->passport_photograph}'";    
        }
        if (isset($this->date_of_birth) && $this->date_of_birth!=="" ) {
            $sql.= ", date_of_birth = '{$this->date_of_birth}'";    
        }
        if (isset($this->gender) && $this->gender!=="" ) {
            $sql.= ", gender = '{$this->gender}'";    
        }
        if (isset($this->nationality) && $this->nationality!=="" ) {
            $sql.= ", nationality = '{$this->nationality}'";    
        }
        if (isset($this->state_of_origin) && $this->state_of_origin!=="" ) {
            $sql.= ", state_of_origin = '{$this->state_of_origin}'";    
        }
        if (isset($this->religion) && $this->religion!=="" ) {
            $sql.= ", religion = '{$this->religion}'";    
        }
        if (isset($this->present_class) && $this->present_class!=="" ) {
            $sql.= ", present_class = '{$this->present_class}'";    
        }
        if (isset($this->class_seeking_admission_to) && $this->class_seeking_admission_to!=="" ) {
            $sql.= ", class_seeking_admission_to = '{$this->class_seeking_admission_to}'";    
        }
        if (isset($this->home_address) && $this->home_address!=="" ) {
            $sql.= ", home_address = '{$this->home_address}'";    
        }
        if (isset($this->previous_school) && $this->previous_school!=="" ) {
            $sql.= ", previous_school = '{$this->previous_school}'";    
        }
        if (isset($this->certificate_obtained) && $this->certificate_obtained!=="" ) {
            $sql.= ", certificate_obtained = '{$this->certificate_obtained}'";    
        }
        if (isset($this->skills) && $this->skills!=="" ) {
            $sql.= ", skills = '{$this->skills}'";    
        }
        if (isset($this->other_information) && $this->other_information!=="" ) {
            $sql.= ", other_information = '{$this->other_information}'";    
        }
        if (isset($this->clergy_attestation) && $this->clergy_attestation!=="" ) {
            $sql.= ", clergy_attestation = '{$this->clergy_attestation}'";    
        }
        if (isset($this->birth_certificate) && $this->birth_certificate!=="" ) {
            $sql.= ", birth_certificate = '{$this->birth_certificate}'";    
        }
        if (isset($this->test_score) && $this->test_score!=="" ) {
            $sql.= ", test_score = '{$this->test_score}'";    
        }
        if (isset($this->parent_id) && $this->parent_id!=="" ) {
            $sql.= ", parent_id = '{$this->parent_id}'";    
        }
        if (isset($this->completed) && $this->completed!=="" ) {
            $sql.= ", completed = '{$this->completed}'";    
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
            $sql = "SELECT * from applicants order by id DESC";
        } else {
        $sql = "SELECT * from applicants WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM applicants WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}