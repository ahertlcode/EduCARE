<?php
/**
This php script implements 

PHP Version 5+
@Author: Abayomi Apetu
*/


require "DbHandlers.php";

class Payment{

    /** 
Object(class) properties.
     Object(class) public properties.
*/ 
    public $id;
    public $teller_number;
    public $payee;
    public $payee_phone;
    public $Bank;
    public $Account_Number;
    public $amount_Paid;
    public $deposit_date;
    public $source_Wallet;
    public $dest_Wallet;
    public $slip_Upload;
    public $payment_purpose;
    public $paymentchannel;



    public function _construct(){
        /** Todo, add code for system initialization here!*/ 
    }

    public function save(){
        $db = new DbHandlers();
        $sql = "INSERT INTO payments(";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= 'id';    
        }
        if (isset($this->teller_number) && $this->teller_number!=="" ) {
            $sql.= ',teller_number';    
        }
        if (isset($this->payee) && $this->payee!=="" ) {
            $sql.= ',payee';    
        }
        if (isset($this->payee_phone) && $this->payee_phone!=="" ) {
            $sql.= ',payee_phone';    
        }
        if (isset($this->Bank) && $this->Bank!=="" ) {
            $sql.= ',Bank';    
        }
        if (isset($this->Account_Number) && $this->Account_Number!=="" ) {
            $sql.= ',Account_Number';    
        }
        if (isset($this->amount_Paid) && $this->amount_Paid!=="" ) {
            $sql.= ',amount_Paid';    
        }
        if (isset($this->deposit_date) && $this->deposit_date!=="" ) {
            $sql.= ',deposit_date';    
        }
        if (isset($this->source_Wallet) && $this->source_Wallet!=="" ) {
            $sql.= ',source_Wallet';    
        }
        if (isset($this->dest_Wallet) && $this->dest_Wallet!=="" ) {
            $sql.= ',dest_Wallet';    
        }
        if (isset($this->slip_Upload) && $this->slip_Upload!=="" ) {
            $sql.= ',slip_Upload';    
        }
        if (isset($this->payment_purpose) && $this->payment_purpose!=="" ) {
            $sql.= ',payment_purpose';    
        }
        if (isset($this->paymentchannel) && $this->paymentchannel!=="" ) {
            $sql.= ',paymentchannel';    
        }
        $sql.= ") VALUES (";
        if (isset($this->id) && $this->id!=="") {
            $sql.="'{$this->id}'";    
        }
        if (isset($this->teller_number) && $this->teller_number!=="") {
            $sql.=",'{$this->teller_number}'";    
        }
        if (isset($this->payee) && $this->payee!=="") {
            $sql.=",'{$this->payee}'";    
        }
        if (isset($this->payee_phone) && $this->payee_phone!=="") {
            $sql.=",'{$this->payee_phone}'";    
        }
        if (isset($this->Bank) && $this->Bank!=="") {
            $sql.=",'{$this->Bank}'";    
        }
        if (isset($this->Account_Number) && $this->Account_Number!=="") {
            $sql.=",'{$this->Account_Number}'";    
        }
        if (isset($this->amount_Paid) && $this->amount_Paid!=="") {
            $sql.=",'{$this->amount_Paid}'";    
        }
        if (isset($this->deposit_date) && $this->deposit_date!=="") {
            $sql.=",'{$this->deposit_date}'";    
        }
        if (isset($this->source_Wallet) && $this->source_Wallet!=="") {
            $sql.=",'{$this->source_Wallet}'";    
        }
        if (isset($this->dest_Wallet) && $this->dest_Wallet!=="") {
            $sql.=",'{$this->dest_Wallet}'";    
        }
        if (isset($this->slip_Upload) && $this->slip_Upload!=="") {
            $sql.=",'{$this->slip_Upload}'";    
        }
        if (isset($this->payment_purpose) && $this->payment_purpose!=="") {
            $sql.=",'{$this->payment_purpose}'";    
        }
        if (isset($this->paymentchannel) && $this->paymentchannel!=="") {
            $sql.=",'{$this->paymentchannel}'";    
        }
        $sql.=")";
        $sql = str_replace("(,", "(", $sql);
        $savein = $db->executeQuery($sql);
        return $savein;
    }

    public function update($pvcol, $pval){
        $db = new DbHandlers();
        $sql = "UPDATE payments SET ";
        if (isset($this->id) && $this->id!=="" ) {
             $sql.= " id = '{$this->id}'";    
        }
        if (isset($this->teller_number) && $this->teller_number!=="" ) {
            $sql.= ", teller_number = '{$this->teller_number}'";    
        }
        if (isset($this->payee) && $this->payee!=="" ) {
            $sql.= ", payee = '{$this->payee}'";    
        }
        if (isset($this->payee_phone) && $this->payee_phone!=="" ) {
            $sql.= ", payee_phone = '{$this->payee_phone}'";    
        }
        if (isset($this->Bank) && $this->Bank!=="" ) {
            $sql.= ", Bank = '{$this->Bank}'";    
        }
        if (isset($this->Account_Number) && $this->Account_Number!=="" ) {
            $sql.= ", Account_Number = '{$this->Account_Number}'";    
        }
        if (isset($this->amount_Paid) && $this->amount_Paid!=="" ) {
            $sql.= ", amount_Paid = '{$this->amount_Paid}'";    
        }
        if (isset($this->deposit_date) && $this->deposit_date!=="" ) {
            $sql.= ", deposit_date = '{$this->deposit_date}'";    
        }
        if (isset($this->source_Wallet) && $this->source_Wallet!=="" ) {
            $sql.= ", source_Wallet = '{$this->source_Wallet}'";    
        }
        if (isset($this->dest_Wallet) && $this->dest_Wallet!=="" ) {
            $sql.= ", dest_Wallet = '{$this->dest_Wallet}'";    
        }
        if (isset($this->slip_Upload) && $this->slip_Upload!=="" ) {
            $sql.= ", slip_Upload = '{$this->slip_Upload}'";    
        }
        if (isset($this->payment_purpose) && $this->payment_purpose!=="" ) {
            $sql.= ", payment_purpose = '{$this->payment_purpose}'";    
        }
        if (isset($this->paymentchannel) && $this->paymentchannel!=="" ) {
            $sql.= ", paymentchannel = '{$this->paymentchannel}'";    
        }
        $sql .=  " WHERE $pvcol = '$pval'";
        $sql = str_replace("SET ,", "SET ", $sql);
        $upd = $db->executeQuery($sql);
        return $upd;
    }

    public function view($critcol=null, $critval=null) {
        $db = new DbHandlers();
        if(is_null($critcol)){
            $sql = "SELECT * from payments order by id DESC";
        } else {
        $sql = "SELECT * from payments WHERE $critcol ='{$critval}'";
        }
        $datasource = $db->getRowAssoc($sql);
        return $datasource;
    }

    public  function delete($critcol, $critval){
        $db = new DbHandlers();
        $sql = "DELETE FROM payments WHERE $critcol ='{$critval}'";
        $d_out = $db->executeQuery($sql);
        return $d_out;
    }
}