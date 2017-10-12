<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Official Receipt</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="description" content="Avenxo Admin Theme">
<meta name="author" content="">

<script type="text/javascript">
    window.onload = function() {
        window.print();
        window.onfocus=function(){ 
            window.close();
        }
    }
</script>
<style>
    .receipt {
        width: 250px;
        font-family: tahoma;
        font-size: 11px;
        position: absolute;
    }

    #header {
        text-transform: uppercase;
        text-align: center;
    }

    #middle1 {
        text-align: center;
    }

    #middle2 {
        text-align: center;
    }

    #left1 {
        float: left;
        width: 60px;
    }

    #right1 {
        float: right;
        width: 180px;
    }

    #left2 {
        float: left;
        width: 40px;
    }

    #right2 {
        float: right;
        width: 200px;
    }

    #left3 {
        float: left;
        width: 80px;
        padding-top: 10px;
    }

    #center3 {
        float: left;
        width: 100px;
        padding-top: 10px;
    }

    #right3 {
        float: right;
        width: 54px;
        text-align: right;
        padding-top: 10px;
        padding-left: 0px;
        padding-right: 10px;
    }

    #left4 {
        float: left;
        width: 80px;
        padding-top: 10px;
    }

    #center4 {
        float: left;
        width: 35px;
        padding-top: 10px;
    }

    #right4 {
        float: right;
        width: 119px;
        padding-top: 10px;
    }

    #left5 {
        float: left;
        width: 80px;
        padding-top: 10px;
    }

    #center5 {
        float: left;
        width: 100px;
        padding-top: 10px;
    }

    #right5 {
        float: right;
        width: 54px;
        text-align: right;
        padding-top: 10px;
        padding-left: 0px;
        padding-right: 10px;
    }
    .receipt-body-table{
      text-align: right;
      height: 15px;
      padding-left: 6px;
      padding-right: 6px;
      padding-top: 0px !important;
      margin-top: 0px !important;
      padding-bottom: 0px !important;
      margin-bottom: 0px !important;
    }
    .receipt-body-desc{
      text-align: left;
      height: 15px;
      padding-left: 6px;
      padding-right: 6px;
      padding-top: 0px !important;
      margin-top: 0px !important;
      padding-bottom: 0px !important;
      margin-bottom: 0px !important;
    }
    .receipt-body-table-amounts{
      text-align: right;
      height: 15px;
      padding-left: 6px;
      padding-right: 6px;
      padding-top: 0px !important;
      margin-top: 0px !important;
      padding-bottom: 0px !important;
      margin-bottom: 0px !important;
    }
    .cnclass{
        border-bottom: : 1px solid black; 
        height: 100%; 
        width: 99%;
    }
    .aclass{
        border-bottom: 1px solid black; 
        border-top: 1px solid black; 
        height: 100%; 
        width: 99%;
    }
    .woaclass{
        border-bottom: 1px solid black; 
        border-top: 1px solid black; 
        padding-top: 5px; 
        padding-bottom: 5px; 
        width: 99%;
    }
    .tclass{
        border-bottom: 1px solid black; 
        height: 100%; 
        width: 99%;
    }
    .wotclass{
        border-bottom: 1px solid black; 
        padding-top: 5px; 
        padding-bottom: 5px; 
        width: 99%;
    }
</style>
</head>

<body class="">
    <div id="wrapper">
        <div id="layout-static">
            <div class="page-content"><!-- #page-content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="header" style = "font-family: tahoma;">
                                <?php echo $company_info->company_name; ?><br>
                                <?php echo $company_info->company_address; ?><br>
                            </div>
                            <div id="middle1" style = "font-family: tahoma;">
                                VAT Reg TIN: <?php echo $company_info->tin_no; ?><br>
                            </div>
                            <br><br>

                    <center>
                        <h3 style = "font-family: tahoma;">Stock Onhand Report</h3>
                        <h6 style = "font-family: tahoma; text-align:left; padding-left:13%;">    
                            <br><br>Category : 
                            <?php   if ($category==null){
                                        echo "All";
                                    }
                                    else {
                                        echo $category[0]->category_name;
                                    }
                                    
                            ?><br><br>Unit : 
                            <?php   if ($unit==null){
                                        echo "All";
                                    }
                                    else {
                                        echo $unit[0]->unit_name;
                                    }
                                    
                            ?><br><br>Supplier : 
                            <?php   if ($supplier==null){
                                        echo "All";
                                    }
                                    else {
                                        echo $supplier[0]->supplier_name;
                                    }
                                    
                            ?></h6>
                        <table width="75%" style="border-collapse: collapse;border-spacing: 0;font-family: tahoma;font-size: 11px;border: 1px solid gray !important; ">
                            <thead >
                            <tr>
                                <td width="20%" style="text-align: left;height: 15px;padding: 6px;"><b>Barcode</b></td>
                                <td width="30%" style="text-align: left;height: 15px;padding: 6px;"><b>Item Name</b></td>
                                <td width="10%" style="text-align: right;height: 15px;padding: 6px;"><b>SRP</b></td>
                                <td width="10%" style="text-align: right;height: 15px;padding: 6px;"><b>Cost</b></td>
                                <td width="10%" style="text-align: right;height: 15px;padding: 6px;"><b>Onhand</b></td>
                                <td width="20%" style="text-align: right;height: 15px;padding: 6px;border-right: 1px solid gray;"><b>Total Cost</b></td>
                            </tr>
                            
                            </thead>
                            <tbody id="pos_item">
                            <?php
                                $sum = 0;
                                $sqty = 0;
                                $cost = 0;
                                if ($data != null){
                                    foreach($data as $dt){
                                        // $sum += $dt->total;
                                        // $sqty += $dt->qty;
                                        // $cost += $dt->cost_amount;
                                ?>
                                        <tr style="border: 1px solid gray; ">
                                            <td width="15%" style="text-align: left;height: 15px;padding: 6px;"><?php echo $dt->product_code; ?></td>
                                            <td width="25%" style="text-align: left;height: 15px;padding: 6px;"><?php echo $dt->product_desc; ?></td>                                          
                                            <td width="10%" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($dt->sale_cost,2); ?></td>
                                            <td width="10%" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($dt->purchase_cost,2); ?></td>
                                            <td width="10%" style="text-align: right;height: 15px;padding: 6px;"><?php echo $dt->stock_onhand; ?></td>
            
                                            <td width="15%" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($dt->purchase_cost * $dt->stock_onhand,2); ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        <!-- <tr>
                                            <td width="90%" colspan = "6" style="text-align: right;height: 15px;padding: 6px;"><b>Total Qty :</b></td>
                                            <td width="10%" colspan = "1" style="text-align: right;height: 15px;padding: 6px;"><b> <?php echo $sqty; ?></b></td>
                                        </tr>
                                        <tr>
                                            <td width="90%" colspan = "6" style="text-align: right;height: 15px;padding: 6px;"><b>Sales Amount :</b></td>
                                            <td width="10%" colspan = "1" style="text-align: right;height: 15px;padding: 6px;"><b>  <?php echo number_format($sum,2); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td width="90%" colspan = "6" style="text-align: right;height: 15px;padding: 6px;"><b>Cost Amount : </b></td>
                                            <td width="10%" colspan = "1" style="text-align: right;height: 15px;padding: 6px;"><b>  <?php echo number_format($cost,2); ?></b></td>
                                        </tr>
                                        <tr>
                                            <td width="90%" colspan = "6" style="text-align: right;height: 15px;padding: 6px;"><b>Profit : </b></td>
                                            <td width="10%" colspan = "1" style="text-align: right;height: 15px;padding: 6px;"><b>  <?php echo number_format($sum - $cost,2); ?></b></td>
                                        </tr> -->
                                <?php
                                }
                                else
                                {
                                ?>
                                        <tr style="border: 1px solid gray; ">
                                            <td colspan = "7" width="100%" style="text-align: left;height: 15px;padding: 6px; border-right: 1px solid gray;"><b>No Records.</b></td>
                                        </tr>
                                <?php 
                                }
                            ?>
                            
                            </tbody>                             
                        </table>
                        
                </div>
            </div>
        </div>
    </div>
</body>

</html>
