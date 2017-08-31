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
        window.onfocus=function(){ window.close();}
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

<body class="receipt">
    <div id="wrapper">
        <div id="layout-static">
            <div class="page-content"><!-- #page-content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="header">
                                <?php echo $company_info->company_name; ?><br>
                                <?php echo $company_info->company_address; ?><br>
                            </div>
                            <div id="middle1">
                                VAT Reg TIN: <?php echo $company_info->tin_no; ?><br>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px !important;">
                                <div id="left1">
                                    Buyer's&nbsp;Name<br>
                                    Address<br>
                                    TIN&nbsp;#<br>
                                </div>
                                <?php if ($delivery_info->customer_code == 0){?>
                                <div id="right1">
                                      ___________________________<br>
                                      ___________________________<br>
                                      ___________________________<br>
                                </div>
                              <?php }else{?>

                                <div id="right1">
                                    <div class="cnclass">
                                        <?php echo $delivery_info->customer_name; ?>
                                    <div>
                                    <?php if ($delivery_info->address != null){ ?>
                                        <div class="aclass">
                                            <?php echo $delivery_info->address; ?>
                                        </div> 
                                    <?php }else{?>
                                        <div class="woaclass"></div>
                                    <?php }?>  
                                    <?php if ($delivery_info->tin_no != null){ ?>
                                        <div class="tclass">
                                            <?php echo $delivery_info->tin_no; ?>
                                        </div> 
                                    <?php }else{?>
                                        <div class="wotclass"></div>
                                    <?php }?>
                                </div>
                              <?php } ?>
                            </div>
                        </div>
                    </div><br><br><br>

                    <div class="row" style="margin-top: 10px !important;">
                        <div id="" style="text-align: center;" class="col-md-12">
                            MIN#&nbsp;<br>
                            SN#&nbsp;<br>
                            FP#&nbsp;<br>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="left2">
                                Date&nbsp;<br>
                                Cashier&nbsp;<br>
                                Terminal&nbsp;<br>
                                Receipt&nbsp;<br>
                            </div>
                            <div id="right2">
                                # : <?php
                                      $currentDateTime = $delivery_info->transaction_timestamp;
                                      $newDateTime = date('m/d/Y H:i A', strtotime($currentDateTime));
                                      echo $newDateTime;
                                    ?><br>
                                # : <?php echo $delivery_info->cashier; ?><br>
                                # : <?php echo $company_info->terminal_no; ?><br>
                                # : <?php echo $delivery_info->receipt_no; ?><br>
                            </div>
                        </div>
                    </div><br><br><br><br><br>

                    <center>

                        <table width="95%" style="border-collapse: collapse;border-spacing: 0;font-family: tahoma;font-size: 11px;border-top: 1px dashed gray;">
                            <thead>
                            <tr style="border-bottom: 1px dashed gray;">
                                <td width="15%" style="text-align: right;height: 15px;padding: 6px;">Qty</td>
                                <td width="50%" style="text-align: center;height: 15px;padding: 6px;">Description</td>
                                <td width="11%" style="text-align: right;height: 15px;padding: 6px;"></td>
                                <td width="11%" style="text-align: right;height: 15px;padding: 6px;">Price</td>
                                <td width="11%" style="text-align: right;height: 15px;padding: 6px;">Amount</td>
                            </tr>
                            <tr>
                              <td colspan="5" style="padding:4px;">
                            </tr>
                            </thead>
                            <tbody id="pos_item">
                            <?php
                            $count = 0;
                            $discount_total = 0;
                            $sub_total = 0;
                            $qty = 0;
                            foreach($pos_invoice_item as $item){
                            $count++;
                            $qty += $item->pos_qty;
                            $sub_total += $item->total;
                            $discount_total += $item->pos_discount;
                            ?>
                                <tr>
                                    <td width="15%" class="receipt-body-table"><?php echo number_format($item->pos_qty); ?></td>
                                    <td width="50%" class="receipt-body-desc"><?php echo $item->product_desc; ?></td>
                                    <td width="11%" class="receipt-body-table"></td>
                                    <td width="11%" class="receipt-body-table-amounts"><?php echo number_format($item->pos_price,2); ?></td>
                                    <td width="11%" class="receipt-body-table-amounts"><?php echo number_format($item->total,2); ?></td>
                                </tr>
                            <?php
                              if ($item->pos_discount != "0.00"){?>
                                <tr>
                                  <td colspan="3"></td>
                                  <td style="text-align: right;padding-right: 6px;">Disc: </td>
                                  <td style="text-align: right;padding-right: 6px;"><?php echo number_format($item->pos_discount,2); ?></td>
                                </tr>
                            <?php }} ?>
                              <tr>
                                <td colspan="5" style="border-bottom: 1px dashed gray; padding-top: 8px;"></td>
                              </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="2" style="text-align: right;height: 15px;padding-top: 10px;"></td>
                                <td colspan="2" style="text-align: left;height: 15px;padding-top: 10px;">Sub Total : </td>
                                <td style="text-align: right;height: 15px;padding-top: 10px;padding-right: 4px;"><?php
                                echo number_format($sub_total,2); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: left;height: 15px;"></td>
                                <td colspan="2" style="text-align: left;height: 15px;">Discount :</td>
                                <td style="text-align: right;height: 15px;padding-right: 4px;"><?php echo number_format($discount_total,2); ?></td>
                            </tr>
                            </tfoot>
                        </table>
                    </center>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="left3">
                                Amount&nbsp;Due&nbsp;<br>
                                Tendered&nbsp;<br>
                                Change&nbsp;<br>
                            </div>
                            <div id="center3">
                                . . . . . . . . . . . . . . <br>
                                . . . . . . . . . . . . . . <br>
                                . . . . . . . . . . . . . . <br>
                            </div>
                            <div id="right3">
                                <?php echo $delivery_info->amount_due; ?><br>
                                <?php echo $delivery_info->tendered; ?><br>
                                <?php echo $delivery_info->change; ?><br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="left4">
                                Total&nbsp;Item(s)&nbsp;<br>
                                Total&nbsp;Qty&nbsp;<br>
                            </div>
                            <div id="center4">
                                . . . . <br>
                                . . . . <br>
                            </div>
                            <div id="right4">
                                <?php echo $count; ?><br>
                                <?php echo $qty; ?><br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="left5">
                                Net&nbsp;Vat&nbsp;Sales&nbsp;<br>
                                Vat&nbsp;Sales&nbsp;<br>
                                12%&nbsp;Vat&nbsp;<br>
                                Non-Vat&nbsp;Sales&nbsp;<br>
                            </div>
                            <div id="center5">
                                . . . . . . . . . . . . . . <br>
                                . . . . . . . . . . . . . . <br>
                                . . . . . . . . . . . . . . <br>
                                . . . . . . . . . . . . . . <br>
                            </div>
                            <div id="right5">
                                <?php echo number_format($delivery_info->before_tax,2); ?><br>
                                <?php echo number_format($delivery_info->total_after_tax,2); ?><br>
                                <?php echo number_format($delivery_info->total_tax_amount,2); ?><br>
                                <?php echo number_format($delivery_info->non_vat_sales,2); ?><br><br>
                            </div>
                        </div>
                    </div><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="row">
                      <div class="col-md-12">
                          <?php foreach ($sc_info as $sc_info) {?>
                            <p>Senior Citizen Discount</p>
                            <hr style="border: 1px dashed gray !important;">
                            <table>
                              <tr>
                                <td>ID: </td>
                                <td><?php echo $sc_info->seniorID;?></td>
                              </tr>
                              <tr>
                                <td>NAME: </td>
                                <td><?php echo $sc_info->seniorName;?></td>
                              </tr>
                              <tr>
                                <td>ADD: </td>
                                <td><?php echo $sc_info->seniorAddress;?></td>
                              </tr>
                              <tr>
                                <td>AMNT: </td>
                                <td><?php echo $sc_info->discountAmount;?></td>
                              </tr>
                            </table>
                            <hr style="border: 1px dashed gray !important;">
                        <?php } ?>
                      </div>
                    </div><br>
                    <div class="row">
                        <div id="middle2" class="col-md-12">
                            <?php echo $footer_info->note1; ?><br>
                            <?php echo $footer_info->note2; ?><br>
                            <?php echo $footer_info->note3; ?><br>
                            <?php echo $footer_info->note4; ?><br>
                            <?php echo $footer_info->note5; ?><br>
                            <?php echo $footer_info->note6; ?><br>
                            <?php echo $footer_info->note7; ?><br>
                            <?php echo $footer_info->note8; ?><br>
                            <?php echo $footer_info->note9; ?><br>
                            <?php echo $footer_info->note10; ?><br>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
