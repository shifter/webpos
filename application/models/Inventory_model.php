<?php

class Inventory_model extends CORE_Model {
    protected  $table="inventory";
    protected  $pk_id="inventory_id";

    function __construct() {
        parent::__construct();
    }

    function get_inventory_list($inventory_id=null){
        $sql="  SELECT
                  a.*
                FROM
                  inventory as a
                WHERE
                    a.is_deleted=FALSE AND a.is_active=TRUE
                ".($inventory_id==null?"":" AND a.inventory_id=$inventory_id")."
            ";
        return $this->db->query($sql)->result();
    }

    function get_inventory_onhand_list_filter($inventoryfromdate,$inventorytodate){
        $sql="SELECT products.product_id,product_desc,product_code,products.sale_cost,tax_rate,products.product_id,products.promo_cost,products.discounted_cost,products.markup_percent,
              ( (COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0))-(COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0)) )
              as stock_onhand,(COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0)) as total_in,COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0) as total_out FROM products
              LEFT JOIN
              (
              SELECT SUM(dr_qty) as totalreceive,product_id FROM delivery_invoice_items
              LEFT JOIN delivery_invoice ON
              delivery_invoice_items.dr_invoice_id=delivery_invoice.dr_invoice_id
              WHERE date_received BETWEEN '".$inventoryfromdate."' AND '".$inventorytodate."'
              AND delivery_invoice_items.is_deleted = 0
              GROUP BY product_id
              ) as dii
              ON products.product_id=dii.product_id
              LEFT JOIN
              (
              SELECT SUM(pos_qty) as totalsales,product_id FROM pos_invoice_items
              LEFT JOIN pos_invoice ON
              pos_invoice_items.pos_invoice_id=pos_invoice.pos_invoice_id
              WHERE transaction_date BETWEEN '".$inventoryfromdate."' AND '".$inventorytodate."'
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
              LEFT JOIN issuance ON
              issuance_items.issuance_id=issuance.issuance_id
              WHERE date_issued BETWEEN '".$inventoryfromdate."' AND '".$inventorytodate."'
              WHERE issuance_items.is_deleted = 0
              GROUP BY product_id
              ) as ii
              ON products.product_id=ii.product_id
              ";
        return $this->db->query($sql)->result();
    }

    function get_inventory_onhand_list(){
        $sql="SELECT products.product_id,product_desc,product_code,products.sale_cost,products.purchase_cost,tax_rate,products.promo_cost,products.discounted_cost,products.markup_percent,
              categories.category_id,categories.category_name,brands.brand_id,brands.brand_name,units.unit_id,units.unit_name,
              vendors.vendor_id,vendors.vendor_name,suppliers.supplier_id,suppliers.supplier_name,products.max_stock,products.min_stock,
              ( (COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0))-(COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0)) )
              as stock_onhand,(COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0)) as total_in,COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0) as total_out FROM products
              LEFT JOIN categories ON
                products.category_id=categories.category_id
              LEFT JOIN brands ON
                products.brand_id=brands.brand_id
              LEFT JOIN units ON
                products.unit_id=units.unit_id
              LEFT JOIN vendors ON
                products.vendor_id=vendors.vendor_id
              LEFT JOIN suppliers ON
                products.supplier_id=suppliers.supplier_id
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
              ";
        return $this->db->query($sql)->result();
    }

    function get_inventory_onhand_list_filter_id($product_id){
        $sql="SELECT products.product_id,product_desc,product_code,products.sale_cost,products.purchase_cost,tax_rate,products.product_id,products.promo_cost,products.discounted_cost,products.markup_percent,
              categories.category_id,categories.category_name,brands.brand_id,brands.brand_name,units.unit_id,units.unit_name,
              vendors.vendor_id,vendors.vendor_name,suppliers.supplier_id,suppliers.supplier_name,products.max_stock,products.min_stock,
              ( (COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0))-(COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0)) )
              as stock_onhand,(COALESCE(dii.totalreceive,0)+COALESCE(sda.total_added_stock,0)) as total_in,COALESCE(pii.totalsales,0)+COALESCE(sdd.total_deducted_stock,0)+COALESCE(ii.total_issued_qty,0) as total_out FROM products
              LEFT JOIN categories ON
                products.category_id=categories.category_id
              LEFT JOIN brands ON
                products.brand_id=brands.brand_id
              LEFT JOIN units ON
                products.unit_id=units.unit_id
              LEFT JOIN vendors ON
                products.vendor_id=vendors.vendor_id
              LEFT JOIN suppliers ON
                products.supplier_id=suppliers.supplier_id
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
              WHERE products.product_id=".$product_id."
              ";
        return $this->db->query($sql)->result();
    }
}
?>
