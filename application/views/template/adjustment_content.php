<html>
<head>
<style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Test</title>
<style type="text/css">
    table { page-break-inside:auto }
    div   { page-break-inside:avoid; } /* Thadj adj the key */
    thead { dadjplay:table-header-group }
    tfoot { dadjplay:table-footer-group }
</style>
 <script type="text/javascript">
      window.onload = function() {
       window.print();
		window.onfocus=function(){ window.close();}
   }
 </script>
</head>

<body>
<div>
    <center><table width="95%" cellpadding="5" style="font-size: 11">
            <tr>
                <td width="45%" valign="top">
                    <br />
                    <span>Contact Person :</span><br />
                    <strong><?php echo "no contact" ?></strong><br>
                </td>

                <td width="50%" align="right">
                    <h4>Adjustment No.</h4>
                    <h4 class="text-navy"><?php echo $adjustment_info->adjustment_no; ?></h4>

                    <span>Company :</span>
                    <address>
                        <strong><?php echo $company_info->company_name; ?></strong><br>
                        <strong><?php echo $company_info->company_address; ?></strong><br>
                        <abbr title="Phone">P:</abbr> <?php echo $company_info->landline; ?>
                    </address>
                    <br />

                    <p>

                        <span><strong>Date Adjusted : </strong> <?php echo  date_format(new DateTime($adjustment_info->date_created),"m/d/Y"); ?></span><br />

                    </p>
                </td>
            </tr>
        </table></center>

    <br /><br />

    <center>
        <table width="95%" style="border-collapse: collapse;border-spacing: 0;font-size: 11">
            <thead>
            <tr>
                <th width="50%" style="border-bottom: 2px solid gray;text-align: left;height: 30px;padding: 6px;">Item</th>
                <th width="12%" style="border-bottom: 2px solid gray;text-align: right;height: 30px;padding: 6px;">Qty</th>
                <th width="12%" style="border-bottom: 2px solid gray;text-align: center;height: 30px;padding: 6px;">Adjustment Type</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($adjustment_items as $item){ ?>
                <tr>
                    <td width="50%" style="border-bottom: 1px solid gray;text-align: left;height: 30px;padding: 6px;"><?php echo $item->product_desc; ?></td>
                    <td width="12%" style="border-bottom: 1px solid gray;text-align: right;height: 30px;padding: 6px;"><?php echo number_format($item->adj_qty,2); ?></td>
                    <td width="12%" style="border-bottom: 1px solid gray;text-align: center;height: 30px;padding: 6px;"><?php echo $item->adjustment_type; ?></td>
                </tr>
            <?php } ?>

            </tbody>
        </table><br /><br />
    </center>
</div>
</body>
</html>
