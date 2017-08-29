<html>
<head>
<style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Test</title>
<style type="text/css">
    table { page-break-inside:auto }
    div   { page-break-inside:avoid; } /* This is the key */
    thead { display:table-header-group }
    tfoot { display:table-footer-group }
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
                    <span>Location :</span><br /><br />
                    <address>
                        <strong><?php echo $issuance_info->location_name; ?></strong>
                <td width="50%" align="right">
                    <h4>Issuance No.</h4>
                    <h4 class="text-navy"><?php echo $issuance_info->issuance_no; ?></h4>

                    <span>Company :</span>
                    <address>
                        <strong><?php echo $company_info->company_name; ?></strong><br>
                        <strong><?php echo $company_info->company_address; ?></strong><br>
                        <abbr title="Phone">P:</abbr> <?php echo $company_info->landline; ?>
                    </address>
                    <br />

                    <p>

                        <span><strong>Date Issued : </strong> <?php echo  date_format(new DateTime($issuance_info->date_created),"m/d/Y"); ?></span><br />

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
                
            </tr>
            </thead>
            <tbody>
            <?php foreach($issuance_items as $item){ ?>
                <tr>
                    <td width="50%" style="border-bottom: 1px solid gray;text-align: left;height: 30px;padding: 6px;"><?php echo $item->product_desc; ?></td>
                    <td width="12%" style="border-bottom: 1px solid gray;text-align: right;height: 30px;padding: 6px;"><?php echo number_format($item->is_qty,2); ?></td>

                </tr>
            <?php } ?>

            </tbody>

        </table><br /><br />
    </center>
</div>
</body>
</html>
