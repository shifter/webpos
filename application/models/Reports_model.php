<?php

class Reports_model extends CORE_Model {
    function __construct() {
        parent::__construct();
    }
    function bestseller($from, $to, $cashier, $category, $unit, $supplier, $sort){
        $beg = date('Y-m-d',strtotime($from));
        $end = date('Y-m-d',strtotime($to));
        $sql = "SELECT products.product_desc, products.product_code, SUM(pos_invoice_items.pos_qty) as qty, SUM(pos_invoice_items.total) as amount FROM pos_invoice 
                LEFT JOIN pos_invoice_items ON pos_invoice.pos_invoice_id = pos_invoice_items.pos_invoice_id 
                LEFT JOIN products ON pos_invoice_items.product_id = products.product_id 
                WHERE (pos_invoice.transaction_date BETWEEN '".$beg."' AND '".$end."') AND pos_invoice.denomination_id != 0 AND IF(".$category." = 0, 0=0, products.category_id=".$category.") AND IF(".$unit." = 0, 0=0, products.unit_id = ".$unit.") AND IF(".$supplier." = 0, 0=0, products.supplier_id=".$supplier." ) AND IF(".$cashier." = 0, 0=0, pos_invoice.user_id = ".$cashier.") GROUP BY products.product_id ORDER BY ".$sort." DESC";
        return $this->db->query($sql)->result();
    }
    function itemsales($from, $to, $cashier, $category, $unit, $supplier){
        $beg = date('Y-m-d',strtotime($from));
        $end = date('Y-m-d',strtotime($to));
        $sql = "SELECT SUM(pos_qty) as qty, SUM(total) as total, products.product_code, products.product_desc, units.unit_name from pos_invoice_items 
                LEFT JOIN products ON products.product_id = pos_invoice_items.product_id 
                LEFT JOIN units ON units.unit_id = products.unit_id 
                LEFT JOIN pos_invoice ON pos_invoice.pos_invoice_id = pos_invoice_items.pos_invoice_id 
                WHERE (pos_invoice.transaction_date BETWEEN '".$beg."' AND '".$end."') AND IF(".$cashier." = 0, 0=0, pos_invoice.user_id = ".$cashier.") AND pos_invoice.denomination_id != 0 AND IF(".$category." = 0, 0=0, products.category_id=".$category.") AND IF(".$unit." = 0, 0=0, products.unit_id = ".$unit.") AND IF(".$supplier." = 0, 0=0, products.supplier_id=".$supplier." ) Group by pos_invoice_items.product_id Order By products.product_desc";
        return $this->db->query($sql)->result();
    }
    function netprofit($from, $to, $cashier, $category, $unit, $supplier){
        $beg = date('Y-m-d', strtotime($from));
        $end = date('Y-m-d', strtotime($to));
        $sql = "SELECT products.product_code as code, products.product_desc as descs, AVG(pos_invoice_items.pos_price) as price, AVG(pos_invoice_items.pos_cost) as cost, SUM(pos_invoice_items.pos_qty) as qty, SUM(pos_invoice_items.total) as total, SUM(pos_invoice_items.pos_qty) * AVG(pos_invoice_items.pos_cost) as cost_amount FROM pos_invoice_items 
                LEFT JOIN products ON products.product_id = pos_invoice_items.product_id 
                LEFT JOIN pos_invoice ON pos_invoice.pos_invoice_id = pos_invoice_items.pos_invoice_id 
                WHERE (pos_invoice.transaction_date BETWEEN '".$beg."' AND '".$end."') AND IF(".$cashier." = 0, 0=0, pos_invoice.user_id = ".$cashier.") AND pos_invoice.denomination_id != 0 AND IF(".$category." = 0, 0=0, products.category_id=".$category.") AND IF(".$unit." = 0, 0=0, products.unit_id = ".$unit.") AND IF(".$supplier." = 0, 0=0, products.supplier_id=".$supplier." ) Group by pos_invoice_items.product_id Order By products.product_desc";
        return $this->db->query($sql)->result();
    }
    function stockonhand($from, $to, $cashier, $category, $unit, $supplier, $sort){
        $sql = "SELECT product_desc,product_code,products.sale_cost,products.purchase_cost,((COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0))-(COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0)) ) as stock_onhand FROM products
            LEFT JOIN
              (
                  SELECT SUM(dr_qty) as totalreceive,product_id FROM delivery_invoice_items
                  LEFT JOIN delivery_invoice ON
                  delivery_invoice_items.dr_invoice_id=delivery_invoice.dr_invoice_id
                  WHERE delivery_invoice_items.is_deleted = 0
                  GROUP BY product_id
              ) as dii
              ON products.product_id=dii.product_id
              LEFT JOIN
              (
                  SELECT SUM(pos_qty) as totalsales,product_id FROM pos_invoice_items
                  LEFT JOIN pos_invoice ON
                  pos_invoice_items.pos_invoice_id=pos_invoice.pos_invoice_id
                  GROUP BY product_id
              ) as pii
              ON products.product_id=pii.product_id
              LEFT JOIN
              (
                  SELECT SUM(adj_qty) as total_added_stock,product_id FROM adjustment_items
                  LEFT JOIN adjustment
                  ON adjustment.adjustment_id=adjustment_items.adjustment_id
                  WHERE adjustment_items.adjustment_type='IN'
                  AND adjustment.is_deleted = 0
                  GROUP BY product_id
              ) as sda
              ON products.product_id=sda.product_id
              LEFT JOIN
              (
                  SELECT SUM(adj_qty) as total_deducted_stock,product_id FROM adjustment_items
                  LEFT JOIN adjustment
                  ON adjustment.adjustment_id=adjustment_items.adjustment_id
                  WHERE adjustment_items.adjustment_type='OUT'
                  AND adjustment.is_deleted = 0
                  GROUP BY product_id
              ) as sdd
              ON products.product_id=sdd.product_id
              LEFT JOIN
              (
                  SELECT SUM(is_qty) as total_issued_qty,product_id FROM issuance_items
                  WHERE issuance_items.is_deleted = 0
                  GROUP BY product_id
              ) as ii
              ON products.product_id=ii.product_id
              WHERE IF(".$category." = 0, 0=0, products.category_id=".$category.") AND IF(".$unit." = 0, 0=0, products.unit_id = ".$unit.") AND IF(".$supplier." = 0, 0=0, products.supplier_id=".$supplier." ) Order By products.product_desc";
        return $this->db->query($sql)->result();
    }
    function xreading($date){
        $sql = 'SELECT SUM(pos_payment.amount_due) as amount, denomination_id, CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ", user_accounts.user_lname) as name FROM pos_invoice LEFT JOIN pos_payment ON pos_invoice.pos_invoice_id = pos_payment.pos_invoice_id LEFT JOIN user_accounts ON user_accounts.user_id = pos_invoice.user_id WHERE denomination_id != 0 and if('.$date.' = 0, 0=0, pos_invoice.transaction_date = "'.$date.'")  GROUP BY denomination_id';
        return $this->db->query($sql)->result();
    }
}

    

?>