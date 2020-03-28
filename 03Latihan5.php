<html>
<head>
<title>Penggunaan Swicth-Case</title>
</head>
<body>
Hari ini :
    <?php
        $nama_hari = date("1");
        switch ($nama_hari) 
        {
            case 'Sunday';
                Print ("Minggu");
                    print "Waktu untuk rebahan";
                break;
            case"Monday";
                Print("Senin <br>");
                    print"Meeting Awal minggu jam 08.00";
                break;
            case "Tuesday" ;
                Print ("Selasa <br>");
                print"Pembukaan Workshop diklat";
            break;
            case "Wednesday" ;
                Print ("Rabu <br>");
                print"Seminar dan launching";
            break;
            case "Thrusday" ;
                Print ("Kamis <br>");
                print"Pertemuan Mahasiswa";
            break;
            case "Friday" ;
                Print ("Jum'at <br>");
                print"Joging";
            break;
            default :
            Print("Sabtu <br>");
                print"Survey harga ke Dusit, Manngga Dua";
        }
    ?>
</body>
</html>