<?php

    $sukupertama = $_POST['sukupertama'];
    $sukukedua = $_POST['sukukedua'];
    $suku = $_POST['suku'];

    echo "<br>";
    echo "keterangan : <br>";
    echo "suku pertama = $sukupertama <br>";
    echo "suku kedua = $sukukedua <br>";
    echo "suku = $suku <br><br>";

    echo "
    <table border=2>
        <tr align=right>
            <td>i</td>
            <td>x</td>
            </tr>";

$hasil = $sukukedua;
$beda = $sukukedua - $sukupertama;

for ($i=1;$i<=$suku;$i++){
    if ($i==1){
        echo "
        <tr align=right>
        <td>$i</td>
        <td>$sukupertama</td>
        </tr>";
  } else if ($i == 2){
        echo "
        <tr align=right>
        <td>$i</td>
        <td>$sukukedua</td>
        </<tr>";
  } else {
    $hasil = $hasil + $beda;
        echo "
        <tr align=right>
        <td>$i</td>
        <td>$hasil</td>
        </tr>";
        

  }  
}
    echo "</table>";


