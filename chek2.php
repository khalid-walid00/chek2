<?php

$receiptNo = $_GET['receipt_no'] ?? '';
$totalAmount = $_GET['total_amount'] ?? '';
$Montant_Avance = $_GET['Montant_Avance'] ?? '';
// $address = $_GET['address'] ?? '';
$shopPhone = $_GET['shop_phone'] ?? '';
$date = $_GET['date'] ?? '';
$time = $_GET['time'] ?? '';
$Shop_Name = $_GET['Shop_Name'] ?? '';
$Clint_Name = $_GET['Clint_Name'] ?? '';
$Type_Invoice = $_GET['Type_Invoice'] ?? '';

/////items///
$item_name = $_GET['item_name'] ?? '';
$item_qty = $_GET['item_qty'] ?? '';
$item_price = $_GET['item_price'] ?? '';
$totalPriceForOne = $_GET['totalPriceForOne'] ?? '';


$array_item_name = explode(",", $item_name);
$array_item_qty = explode(",", $item_qty);
$array_item_price = explode(",", $item_price);
$array_totalPriceForOne = explode(",", $totalPriceForOne);
 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css"/>

</head>
<body>
    <div class="container">
     <div class="title"><?php echo $Shop_Name ?></div>
     <div dir="rtl" class="invoiceNumber">رقم الفاتورة : <?php echo $receiptNo ?></div>
     <div dir="rtl" class="invoiceNumber">الزبون : <?php echo $Clint_Name ?></div>
     <div dir="rtl" class="invoiceNumber">نوع الفاتورة : <?php echo $Type_Invoice ?></div>
    <div style="display: flex;justify-content: space-between;">
    <div dir="rtl" class="invoiceNumber" style="padding-left:0px;padding-right:0px">التاريخ : <?php echo $date ?> </div>
    <div dir="rtl" class="invoiceNumber" style="padding-left:0px;padding-right:0px">التوقيت : <?php echo date_format(date_create($time), "g:i:s a ") ?> </div>
    </div>
      <div>
    <table>
        <thead>
            <tr>
                <th>المجموع</th>
                <th>الثمن</th>
                <th>البضاعة</th>
                <th>العدد</th>
            </tr>
        </thead>
        <tbody>

            <?php for($i = 0; $i < count($array_item_name); $i++) :?>
          <tr>
              <td><?php echo number_format($array_totalPriceForOne[$i],2) ?></td>
              <td><?php echo number_format($array_item_price[$i],2) ?></td>
              <td style="direction: rtl;font-weight: bold"><?php echo $array_item_name[$i] ?></td>
              <td><?php echo $array_item_qty[$i] ?></td>
          </tr>
          <?php endfor; ?>

        </tbody>
    </table>
    <div class="invoiceNumber" style="padding: 5px;" dir="rtl">المجموع العام : <span style="width:max-content" dir="ltr"><?php echo number_format($totalAmount,2) ?> DH</span>   </div>
    <hr>
    <div class="invoiceNumber" style="padding: 5px;" dir="rtl">مبلغ التسبيق : <span style="width:max-content" dir="ltr"><?php echo $Montant_Avance ?> DH </span> </div>
    <hr>
    <div style="padding: 5px;" >Tel : <?php echo $shopPhone ?></div>
</div>
    </div>
    <script>


</script>
</body>
</html>