<?php
echo "Ho va ten: Dinh Xuan Noi <br>";
echo "Ngay sinh: 06/10/2005 <br>";
echo "MSSV:2125110124 <br>";

$HOTEN ="Dinh Xuan Noi";
$MSSV ="2125110124";
$SDT="0941291665";
$NGAYSINH="06/10/2005";
echo "Họ tên: " . $HOTEN . "<br>";
echo "MSSV: " . $MSSV . "<br>";
echo "Số điện thoại: " . $SDT . "<br>";
echo "Ngày sinh: " . $NGAYSINH . "<br>";

define("HOST", "localhost");
define("DATABASE", "ten_csdl");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";
echo "<hr>";


echo "Nháy kép: Xin chào $hoTen <br>"; 
echo 'Nháy đơn: Xin chào $hoTen <br>'; 