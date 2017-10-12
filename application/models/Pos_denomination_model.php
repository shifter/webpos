<?php

class Pos_denomination_model extends CORE_Model {
    protected  $table="pos_denomination";
    protected  $pk_id="denomination_id";

    function __construct() {
        parent::__construct();
    }
    function print_endbatch($denomination_id){
    	$this->db->select('pos_denomination.user_id, CONCAT(user_accounts.user_fname, " ",user_accounts.user_mname," ", ,user_accounts.user_lname) as name,cents5, cents10, cents25, peso1, peso5, peso10, peso20, peso50, peso100, peso200, peso500, peso1000, total_cash, change_fund, pos_invoice_items.total');
        $this->db->from('pos_denomination');
        $this->db->join('pos_invoice', 'pos_invoice.denomination_id = pos_denomination.denomination_id','left');
        $this->db->join('pos_invoice_items', 'pos_invoice_items.pos_invoice_id = pos_invoice.pos_invoice_id','left');
        $this->db->join('user_accounts', 'pos_denomination.user_id = user_accounts.user_id','left');
        $this->db->where('pos_denomination.denomination_id',$denomination_id);
        return $this->db->get()->result();
    }
    function count_transaction($denomination_id){
        $this->db->select('count(pos_invoice.pos_invoice_id) as trans_count, min(pos_payment.receipt_no) as beg, max(pos_payment.receipt_no) as end, sum(pos_payment.amount_due) as receipt_amount, pos_payment_details.cash_amount, pos_payment_details.check_amount, pos_payment_details.card_amount, pos_payment_details.charge_amount, pos_payment_details.gc_amount');
        $this->db->from('pos_invoice');
        $this->db->join('pos_payment', 'pos_invoice.pos_invoice_id = pos_payment.pos_invoice_id','left');
        $this->db->join('pos_payment_details', 'pos_payment.pos_payment_id = pos_payment_details.pos_payment_id', 'left');
        $this->db->where('pos_invoice.denomination_id',$denomination_id);
        return $this->db->get()->result();
    }
    // function discounts(){
    //     $this->db->select('')
    // }
}



?>
