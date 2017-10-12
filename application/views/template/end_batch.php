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
                            <br><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="left2">
                                Cashier&nbsp;<br>
                                <!-- Terminal&nbsp;<br> -->
                                <!-- Receipt&nbsp;<br> -->
                            </div>
                            <div id="right2">
                                 # : <?php echo $denomination_info->name; ?><br>
                                <!-- # : <?php echo $denomination_info->terminal_no; ?><br> -->
                                <!-- # : <?php echo $delivery_info->receipt_no; ?><br> -->
                            </div>
                        </div>
                    </div><br><br><br>

                    <center>

                        <table width="95%" style="border-collapse: collapse;border-spacing: 0;font-family: tahoma;font-size: 11px;border-top: 1px dashed gray;">
                            <thead>
                            <tr style="border-bottom: 1px dashed gray;">
                                <td width="15%" style="text-align: right;height: 15px;padding: 6px;">Cash Count</td>
                                <td width="50%" style="text-align: center;height: 15px;padding: 6px;">QTY</td>
                                <td width="11%" style="text-align: right;height: 15px;padding: 6px;">Amount</td>
                            </tr>
                            <tr>
                              <td colspan="5" style="padding:4px;">
                            </tr>
                            </thead>
                            <tbody id="pos_item">
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">1,000</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso1000; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso1000*1000,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">500</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso500; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso500*500,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">200</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso200; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso200*200,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">100</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso100; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso100*100,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">50</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso50; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso50*50,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">20</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso20; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso20*20,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">10</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso10; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso10*10,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">5</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso5; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso5*5,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">1</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->peso1; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->peso1*1,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">.05</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->cents5; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->cents5*.05,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">.10</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->cents10; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->cents10*.10 ,2); ?></td>
                                </tr>
                                <tr>
                                    <td width="15%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;">.25</td>
                                    <td width="50%" class="receipt-body-desc" style="text-align: center;height: 15px;padding: 6px;"><?php echo $denomination_info->cents25; ?></td>
                                    <td width="11%" class="receipt-body-table" style="text-align: right;height: 15px;padding: 6px;"><?php echo number_format($denomination_info->cents25*.25 ,2); ?></td>
                                </tr>
                                <tr style="border-bottom: 1px dashed gray;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row" >
                            <div class="col-md-12">
                                <div id="left3">
                                    Cash&nbsp;Amount&nbsp;<br>
                                    Change&nbsp;Fund&nbsp;<br><br>
                                    &nbsp;&nbsp;No.&nbsp;Of&nbsp;Transactions:&nbsp;<?php echo $count->trans_count; ?>&nbsp;<br>
                                    <br>
                                </div>
                                <div id="center3">
                                    . . . . . . . . . . . . . .<br>
                                    . . . . . . . . . . . . . .<br><br>
                                     &nbsp;<br>
                                     <br>
                                </div>
                                <div id="right3">
                                    <?php echo number_format($denomination_info->total_cash,2); ?>&nbsp;<br>
                                    <?php echo number_format($denomination_info->change_fund,2); ?>&nbsp;<br><br>
                                    &nbsp;<br>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <table width="95%" style=" border-bottom: 1px dashed gray; border-collapse: collapse;border-spacing: 0;font-family: tahoma;font-size: 11px;">
                            <thead>
                            </thead>
                            <tbody id="pos_item">
                                <tr style="border-top: 1px dashed gray;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Receipt #</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr style="border-bottom: 1px dashed gray;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><?php echo $count->beg; ?></td>
                                    <td></td>
                                    <td style="text-align: right;">BEG #</td>
                                </tr>
                                <tr style="border-bottom: 1px dashed gray;">
                                    <td><?php echo $count->end; ?></td>
                                    <td></td>
                                    <td style="text-align: right;">END #</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Total Receipt Amount</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->receipt_amount,2); ?></td>
                                </tr>
                                <tr>
                                    <td>Cash Drawer Amount</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($denomination_info->total_cash,2); ?></td>
                                </tr>
                                <tr>
                                    <td>Change Fund</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($denomination_info->change_fund,2); ?></td>
                                </tr>
                                <tr>
                                    <td>Total Sales</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->receipt_amount,2); ?></td>
                                </tr>
                                <tr>
                                    <td>Other Payment</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php $total = 0; if($count->card_amount != "0.00"){ ?>
                                <tr>
                                    <td>&nbsp;&nbsp;Card Payment</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->card_amount,2); ?></td>
                                </tr>
                                <?php $total = $total + $count->card_amount; } if($count->check_amount != "0.00"){ ?>
                                <tr>
                                    <td>&nbsp;&nbsp;Check Payment</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->check_amount,2); ?></td>
                                </tr>
                                <?php $total = $total + $count->check_amount; } if($count->charge_amount != "0.00"){ ?>
                                <tr>
                                    <td>&nbsp;&nbsp;Charge Payment</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->charge_amount,2); ?></td>
                                </tr>
                                <?php $total = $total + $count->charge_amount; } if($count->gc_amount != "0.00"){ ?>
                                <tr>
                                    <td>&nbsp;&nbsp;GC Payment</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->gc_amount,2); ?></td>
                                </tr>
                                <?php $total = $total + $count->gc_amount; } ?>
                                <tr>
                                    <td>Total Other Payment</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($total,2); ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php 
                                $count_total = number_format($count->receipt_amount + $denomination_info->change_fund,2);
                                $over = 0;
                                $short = 0;
                                    if ($count_total <= $total + $denomination_info->total_cash){
                                        $over = ($total + $denomination_info->total_cash) - $count_total;
                                    }
                                    else{
                                        $short = $count_total - ($total + $denomination_info->total_cash);
                                    }
                                ?>
                                <tr>
                                    <td>Total (Short)</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($short,2); ?></td>
                                </tr>
                                <tr>
                                    <td>Total (OVER)</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($over,2); ?></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Grand Total</td>
                                    <td>. . . . . . . . . .</td>
                                    <td style="text-align: right;"><?php echo number_format($count->receipt_amount,2); ?></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Other Discount</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Senior Citizen Discount</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Walk-in</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row" >
                            <div class="col-md-12">
                                <div>
                                    Cashier Signature
                                </div>
                            </div>
                        </div>
                           <!--  <?php
                              if ($item->pos_discount != "0.00"){?>
                                <tr>
                                  <td colspan="3"></td>
                                  <td style="text-align: right;padding-right: 6px;">Disc: </td>
                                  <td style="text-align: right;padding-right: 6px;"><?php echo number_format($item->pos_discount,2); ?></td>
                                </tr>
                            <?php }
                             ?>
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
                            </tfoot> -->
                        </table>
                    <!-- </center>

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
                                <?php echo number_format($delivery_info->cash_amount,2); ?><br>
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
                    </div> -->
                    <!-- <div class="row">
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
                    </div><br> -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
