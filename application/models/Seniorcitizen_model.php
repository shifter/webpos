<?php

class Seniorcitizen_model extends CORE_Model {
    protected  $table="tblseniorcitizen";
    protected  $pk_id="snrctzn_id";

    function __construct() {
        parent::__construct();
    }

    function get_receipt($pos_paymt_id){
      $this->db->select('sc.*');
      $this->db->from('tblseniorcitizen as sc');
      $this->db->where('sc.pos_payment_id', $pos_paymt_id);
      return $this->db->get()->result();
    }
}
?>
