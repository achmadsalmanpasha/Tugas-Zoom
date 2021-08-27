<?php

$tgl = @$_POST['tgl'];
$bln = @$_POST['bln'];
$hasil = @$_POST['hasil'];

switch ($bln) {
    case 1: //JANUARI

        if ($tgl >= 1 && $tgl <= 19) {
            $hasil = 'Capricorn';
        }
        if ($tgl >= 20 && $tgl <= 31) {
            $hasil = 'Aquarius';
        }

        break;

    case 2: //FEBRUARI

        if ($tgl >= 1 && $tgl <= 18) {
            $hasil = 'Aquarius';
        }
        if ($tgl >= 19 && $tgl <= 29) {
            $hasil = 'Pisces';
        }


        break;


    case 3: //MARET

        if ($tgl >= 1 && $tgl <= 20) {
            $hasil = 'Pisces';
        }
        if ($tgl >= 21 && $tgl <= 31) {
            $hasil = 'Aries';
        }
        break;

    case 4: //APRIL

        if ($tgl >= 1 && $tgl <= 19) {
            $hasil = 'Aries';
        }
        if ($tgl >= 20 && $tgl <= 30) {
            $hasil = 'Taurus';
        }
        break;

    case 5: //MEI

        if ($tgl >= 1 && $tgl <= 20) {
            $hasil = 'Taurus';
        }
        if ($tgl >= 21 && $tgl <= 31) {
            $hasil = 'Gemini';
        }
        break;

    case 6: //JUNI

        if ($tgl >= 1 && $tgl <= 20) {
            $hasil = 'Gemini';
        }
        if ($tgl >= 21 && $tgl <= 30) {
            $hasil = 'Cancer';
        }
        break;

    case 7: //JULI

        if ($tgl >= 1 && $tgl <= 22) {
            $hasil = 'Cancer';
        }
        if ($tgl >= 23 && $tgl <= 31) {
            $hasil = 'Leo';
        }
        break;

    case 8: //AGUSTUS

        if ($tgl >= 1 && $tgl <= 22) {
            $hasil = 'Leo';
        }
        if ($tgl >= 23 && $tgl <= 31) {
            $hasil = 'Virgo';
        }
        break;

    case 9: //SEPTEMBER

        if ($tgl >= 1 && $tgl <= 22) {
            $hasil = 'Virgo';
        }
        if ($tgl >= 23 && $tgl <= 30) {
            $hasil = 'Libra';
        }
        break;

    case 10: //OKTOBER

        if ($tgl >= 1 && $tgl <= 22) {
            $hasil = 'Libra';
        }
        if ($tgl >= 23 && $tgl <= 31) {
            $hasil = 'Scorpio';
        }
        break;

    case 11: //NOVEMBER

        if ($tgl >= 1 && $tgl <= 21) {
            $hasil = 'Scorpio';
        }
        if ($tgl >= 22 && $tgl <= 30) {
            $hasil = 'Sagittarius';
        }
        break;

    case 12: //DESEMBER

        if ($tgl >= 1 && $tgl <= 21) {
            $hasil = 'Sagittaarius';
        }
        if ($tgl >= 22 && $tgl <= 31) {
            $hasil = 'Capricorn';
        }
        break;

    default:
        $hasil = 'MASIH KOSONG';
        break;
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS ZOOM-SALMAN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>zodiak</h2>

    <form action="" method="post">
        <label for="fname">Tanggal Lahir :</label><br>
  <input type="text" name="tgl" value="<?=$tgl?>"><br>
  <label for="lname">Bulan Lahir :</label><br>
  <input type="text" name="bln" value="<?=$bln?>"><br><br>
  <label for="lname">Hasil :</label><br>
  <input type="text" name="hasil" value="<?=$hasil?>"><br><br>
  <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>