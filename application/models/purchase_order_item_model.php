<?php

class purchase_order_item_model extends CORE_Model {
    protected  $table="purchase_order_items";
    protected  $pk_id="po_item_id";
    protected  $fk_id="purchase_order_id";

    function __construct() {
        parent::__construct();
    }


}



?>