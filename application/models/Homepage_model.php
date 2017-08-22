<?php

class Homepage_model extends CORE_Model {
    protected  $table="";
    protected  $pk_id="";

    function __construct() {
        parent::__construct();
    }

    function getpatients() {
      $get_patients=$this->db->query('SELECT COUNT(ref_patient_id) as patient_count FROM ref_patient WHERE is_deleted=0');
                                        $patients = $get_patients->result();
                                        return $patients[0]->patient_count;
                                        /*return $check_loan_temp[0]->countcheck;*/
                                        //it will return whether it is true or false
    }

    function getusers() {
      $get_users=$this->db->query('SELECT COUNT(user_id) as user_count FROM user_accounts WHERE is_deleted=0');
                                        $users = $get_users->result();
                                        return $users[0]->user_count;
                                        /*return $check_loan_temp[0]->countcheck;*/
                                        //it will return whether it is true or false
    }

    function gettreatedpatients() {
      $get_treated_patients=$this->db->query('SELECT COUNT(patient_info_id) as treated_patients FROM patient WHERE is_deleted=0');
                                        $treatedpatients = $get_treated_patients->result();
                                        return $treatedpatients[0]->treated_patients;
                                        /*return $check_loan_temp[0]->countcheck;*/
                                        //it will return whether it is true or false
    }
}
?>