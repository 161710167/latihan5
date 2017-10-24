<?php

require_once 'alamat.php';

$alamat = new alamat ('yeni','katapang');

echo"nama =".$alamat->get_nama()."<br>";
echo"tempat =".$alamat->get_alamat()."<br>";



?>