
<?php
function acak($panjang)
{
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
  $pos = rand(0, strlen($karakter)-1);
  $string .= $karakter{$pos};
    }
    return $string;
}
//cara memanggilnya
$hasil_1= acak(5);
$hasil_2= acak(7);


echo $hasil_1;
echo "<br />";
echo $hasil_2;

?>