<?php

class Seniorcitizen_model extends CORE_Model {
    protected  $table="tblseniorcitizen";
    protected  $pk_id="snrctzn_id";

    function __construct() {
        parent::__construct();
    }

    function get_receipt($receipt_no){
      $this->db->select('sc.*');
      $this->db->from('tblseniorcitizen as sc');
      $this->db->where('sc.invoiceNumber', $receipt_no);
      return $this->db->get()->result();
    }
}
?>
