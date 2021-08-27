<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 - switch case</title>
</head>
<body>

    <form action="" method="get">
    
        <label for="nama">Tanggal : </label>
        <br> 
        <input type="number" name="tgl" placeholder="Masukan Tanggal Lahir"> 
        <br>
        <br> 
        <label for="Bulan">Bulan : </label>
        <br> 
        <input type="number" name="bln" placeholder="Masukan Bulan Lahir"> 
        <br> 
        <br>
        <input type="submit" name="kirim" value="submit" id="" class="button"> 

    </form>
    </div>
    
</body>
</html>

<?php
    
    //Cek isi variabel apakah ada nilainya dengan menggunakan :
    if ( isset ($_GET['bln']) && isset($_GET['tgl']) ) {
    
    //Variabel
    $bln = $_GET['bln'];
    $tgl = $_GET['tgl'];

    //Jika input ada yang tak diisi atau kosong dan tak sesuai pilihan didalam switch case mak outputnya :
    $hasil = 'SALAH!';
    

    switch ($bln) {
        case 1:
            
            if ($tgl >= 1 && $tgl <= 19 ){
                $hasil = 'CAPRICORN';
            }

            if ($tgl >= 20  && $tgl <= 31 ){
                $hasil = 'AQUARIUS';
            }

            break;
        
        
        case 2:
            
            if ($tgl >= 1 && $tgl <= 18 ){
            $hasil = 'AQUARIUS';
            }
    
            if ($tgl >= 19  && $tgl <= 28 ){
            $hasil = 'PISCES';
            }
    
            break;
            

        case 3:
            
            if ($tgl >= 1 && $tgl <= 20 ){
            $hasil = 'PISCES';
            }

            if ($tgl >= 21  && $tgl <= 31 ){
            $hasil = 'ARIES';
            }

            break;
        

        case 4:
            
            if ($tgl >= 1 && $tgl <= 19 ){
            $hasil = 'ARIES';
            }
    
            if ($tgl >= 20  && $tgl <= 30 ){
            $hasil = 'TAURUS';
            }
    
            break;


        case 5:
            
            if ($tgl >= 1 && $tgl <= 20 ){
            $hasil = 'TAURUS';
                }
        
            if ($tgl >= 21  && $tgl <= 31 ){
            $hasil = 'GEMINI';
            }
        
            break;


        case 6:
            
            if ($tgl >= 1 && $tgl <= 20 ){
            $hasil = 'GEMINI';
            }
            
            if ($tgl >= 21  && $tgl <= 30 ){
            $hasil = 'CANCER';
            }
            
            break;


        case 7:
            
            if ($tgl >= 1 && $tgl <= 22 ){
            $hasil = 'CANCER';
                }
        
            if ($tgl >= 23  && $tgl <= 31 ){
            $hasil = 'LEO';
            }
        
            break;


        case 8:
            
            if ($tgl >= 1 && $tgl <= 22 ){
            $hasil = 'LEO';
                }
        
            if ($tgl >= 23  && $tgl <= 31 ){
            $hasil = 'VIRGO';
            }
        
            break;


        case 9:
            
            if ($tgl >= 1 && $tgl <= 22 ){
            $hasil = 'VIRGO';
            }
        
            if ($tgl >= 23  && $tgl <= 30 ){
            $hasil = 'LIBRA';
            }
        
            break;

            
        case 10:
            
            if ($tgl >= 1 && $tgl <= 22 ){
            $hasil = 'LIBRA';
            }
        
            if ($tgl >= 23  && $tgl <= 31 ){
            $hasil = 'SCORPIUS';
            }
        
            break;


        case 11:
            
            if ($tgl >= 1 && $tgl <= 21 ){
            $hasil = 'SCORPIUS';
            }
        
            if ($tgl >= 22  && $tgl <= 30 ){
            $hasil = 'SAGITARIUS';
            }
        
            break;


        case 12:
            
            if ($tgl >= 1 && $tgl <= 21 ){
            $hasil = 'SAGITARIUS';
            }
        
            if ($tgl >= 22  && $tgl <= 31 ){
            $hasil = 'CAPRICORN';
            }
        
            break;
        
        
        default:
            $hasil = 'DATA TIDAK BENAR';
            break;
    }

    echo $hasil;


?>