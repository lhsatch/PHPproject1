<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];

echo '<p> Your Order is as follows: </p>';
echo $tireqty. ' tires </br>';
echo $oilqty. ' bottles of oil </br>';
echo $sparkqty. ' spark plugs </br>';
$totalqty = 0;
$totalamount = 0.00;

?>
