<?php
require_once("DB_POS_sqli.php");
$sql = "INSERT INTO item_list (item_name,item_price,item_tax, item_attributes,item_description, item_suppliers, item_hsn)
        VALUES ('$Iname', '$Iprice', '$Itax ', '$Iattributes','$Idescription', '$Isuppliers', '$Ihsn')";
