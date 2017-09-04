<?php

class purchase_order_model extends CORE_Model {
    protected  $table="purchase_order";
    protected  $pk_id="purchase_order_id";

    function __construct() {
        parent::__construct();
    }
    function getPoList()
    {
        $query = $this->db->query('SELECT * from purchase_order LEFT JOIN purchase_order_items ON purchase_order.purchase_order_id = purchase_order_items.purchase_order_id WHERE purchase_order.is_deleted = 0
			GROUP BY purchase_order_items.purchase_order_id HAVING SUM(purchase_order_items.po_qty) != 
			SUM(purchase_order_items.delivered_qty)');
        return $query->result();
    }


}



?>