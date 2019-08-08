<?php
include "assets/phpqrcode/qrlib.php";

$apppath = "/3ds/cias/";

//echo $_GET["filedl"]."<br>";
//$filepath = urlencode($_GET["filedl"]);
$dlpath = $_SERVER["HTTP_HOST"].$apppath.$_GET["filedl"];
//echo $dlpath;
QRcode::png($dlpath);