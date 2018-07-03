<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Student{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $student_id;
    public $surname;
    public $first_name;
    public $middle_name;
    public $date_of_birth;
    public $place_of_birth;
    public $parent_id;
    public $state_of_origin;
    public $local_govt_area;
    public $town;
    public $gender;
    public $blood_group;
    public $genotype;
    public $home_address;
    public $sport_house;
    public $class_on_admission;
    public $current_class;
    public $passport_photograph;
    public $email;
    public $phone;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO students(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ',student_id';    
        }
        if (isset($this->surname) && $this->surname!=="" ) {
            $sql.= ',surname';    
        }
        if (isset($this->first_name) && $this->first_name!=="" ) {
            $sql.= ',first_name';    
        }
        if (isset($this->middle_name) && $this->middle_name!=="" ) {
            $sql.= ',middle_name';    
        }
        if (isset($this->date_of_birth) && $this->date_of_birth!=="" ) {
            $sql.= ',date_of_birth';    
        }
        if (isset($this->place_of_birth) && $this->place_of_birth!=="" ) {
            $sql.= ',place_of_birth';    
        }
        if (isset($this->parent_id) && $this->parent_id!=="" ) {
            $sql.= ',parent_id';    
        }
        if (isset($this->state_of_origin) && $this->state_of_origin!=="" ) {
            $sql.= ',state_of_origin';    
        }
        if (isset($this->local_govt_area) && $this->local_govt_area!=="" ) {
            $sql.= ',local_govt_area';    
        }
        if (isset($this->town) && $this->town!=="" ) {
            $sql.= ',town';    
        }
        if (isset($this->gender) && $this->gender!=="" ) {
            $sql.= ',gender';    
        }
        if (isset($this->blood_group) && $this->blood_group!=="" ) {
            $sql.= ',blood_group';    
        }
        if (isset($this->genotype) && $this->genotype!=="" ) {
            $sql.= ',genotype';    
        }
        if (isset($this->home_address) && $this->home_address!=="" ) {
            $sql.= ',home_address';    
        }
        if (isset($this->sport_house) && $this->sport_house!=="" ) {
            $sql.= ',sport_house';    
        }
        if (isset($this->class_on_admission) && $this->class_on_admission!=="" ) {
            $sql.= ',class_on_admission';    
        }
        if (isset($this->current_class) && $this->current_class!=="" ) {
            $sql.= ',current_class';    
        }
        if (isset($this->passport_photograph) && $this->passport_photograph!=="" ) {
            $sql.= ',passport_photograph';    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ',email';    
        }
        if (isset($this->phone) && $this->phone!=="" ) {
            $sql.= ',phone';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->student_id) && $this->student_id!=="") {
            $sql.=",'{$this->student_id}'";    
        }
        if (isset($this->surname) && $this->surname!=="") {
            $sql.=",'{$this->surname}'";    
        }
        if (isset($this->first_name) && $this->first_name!=="") {
            $sql.=",'{$this->first_name}'";    
        }
        if (isset($this->middle_name) && $this->middle_name!=="") {
            $sql.=",'{$this->middle_name}'";    
        }
        if (isset($this->date_of_birth) && $this->date_of_birth!=="") {
            $sql.=",'{$this->date_of_birth}'";    
        }
        if (isset($this->place_of_birth) && $this->place_of_birth!=="") {
            $sql.=",'{$this->place_of_birth}'";    
        }
        if (isset($this->parent_id) && $this->parent_id!=="") {
            $sql.=",'{$this->parent_id}'";    
        }
        if (isset($this->state_of_origin) && $this->state_of_origin!=="") {
            $sql.=",'{$this->state_of_origin}'";    
        }
        if (isset($this->local_govt_area) && $this->local_govt_area!=="") {
            $sql.=",'{$this->local_govt_area}'";    
        }
        if (isset($this->town) && $this->town!=="") {
            $sql.=",'{$this->town}'";    
        }
        if (isset($this->gender) && $this->gender!=="") {
            $sql.=",'{$this->gender}'";    
        }
        if (isset($this->blood_group) && $this->blood_group!=="") {
            $sql.=",'{$this->blood_group}'";    
        }
        if (isset($this->genotype) && $this->genotype!=="") {
            $sql.=",'{$this->genotype}'";    
        }
        if (isset($this->home_address) && $this->home_address!=="") {
            $sql.=",'{$this->home_address}'";    
        }
        if (isset($this->sport_house) && $this->sport_house!=="") {
            $sql.=",'{$this->sport_house}'";    
        }
        if (isset($this->class_on_admission) && $this->class_on_admission!=="") {
            $sql.=",'{$this->class_on_admission}'";    
        }
        if (isset($this->current_class) && $this->current_class!=="") {
            $sql.=",'{$this->current_class}'";    
        }
        if (isset($this->passport_photograph) && $this->passport_photograph!=="") {
            $sql.=",'{$this->passport_photograph}'";    
        }
        if (isset($this->email) && $this->email!=="") {
            $sql.=",'{$this->email}'";    
        }
        if (isset($this->phone) && $this->phone!=="") {
            $sql.=",'{$this->phone}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE students SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->student_id) && $this->student_id!=="" ) {
            $sql.= ", student_id = '{$this->student_id}'";    
        }
        if (isset($this->surname) && $this->surname!=="" ) {
            $sql.= ", surname = '{$this->surname}'";    
        }
        if (isset($this->first_name) && $this->first_name!=="" ) {
            $sql.= ", first_name = '{$this->first_name}'";    
        }
        if (isset($this->middle_name) && $this->middle_name!=="" ) {
            $sql.= ", middle_name = '{$this->middle_name}'";    
        }
        if (isset($this->date_of_birth) && $this->date_of_birth!=="" ) {
            $sql.= ", date_of_birth = '{$this->date_of_birth}'";    
        }
        if (isset($this->place_of_birth) && $this->place_of_birth!=="" ) {
            $sql.= ", place_of_birth = '{$this->place_of_birth}'";    
        }
        if (isset($this->parent_id) && $this->parent_id!=="" ) {
            $sql.= ", parent_id = '{$this->parent_id}'";    
        }
        if (isset($this->state_of_origin) && $this->state_of_origin!=="" ) {
            $sql.= ", state_of_origin = '{$this->state_of_origin}'";    
        }
        if (isset($this->local_govt_area) && $this->local_govt_area!=="" ) {
            $sql.= ", local_govt_area = '{$this->local_govt_area}'";    
        }
        if (isset($this->town) && $this->town!=="" ) {
            $sql.= ", town = '{$this->town}'";    
        }
        if (isset($this->gender) && $this->gender!=="" ) {
            $sql.= ", gender = '{$this->gender}'";    
        }
        if (isset($this->blood_group) && $this->blood_group!=="" ) {
            $sql.= ", blood_group = '{$this->blood_group}'";    
        }
        if (isset($this->genotype) && $this->genotype!=="" ) {
            $sql.= ", genotype = '{$this->genotype}'";    
        }
        if (isset($this->home_address) && $this->home_address!=="" ) {
            $sql.= ", home_address = '{$this->home_address}'";    
        }
        if (isset($this->sport_house) && $this->sport_house!=="" ) {
            $sql.= ", sport_house = '{$this->sport_house}'";    
        }
        if (isset($this->class_on_admission) && $this->class_on_admission!=="" ) {
            $sql.= ", class_on_admission = '{$this->class_on_admission}'";    
        }
        if (isset($this->current_class) && $this->current_class!=="" ) {
            $sql.= ", current_class = '{$this->current_class}'";    
        }
        if (isset($this->passport_photograph) && $this->passport_photograph!=="" ) {
            $sql.= ", passport_photograph = '{$this->passport_photograph}'";    
        }
        if (isset($this->email) && $this->email!=="" ) {
            $sql.= ", email = '{$this->email}'";    
        }
        if (isset($this->phone) && $this->phone!=="" ) {
            $sql.= ", phone = '{$this->phone}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from students order by id DESC";
        } else {
        $sql = "SELECT * from students WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM students WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}