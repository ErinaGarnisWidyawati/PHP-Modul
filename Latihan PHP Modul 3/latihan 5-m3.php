<?php
    $day = date ("");
    switch ($day) {
        case 'Sun' : $hari = "Minggu"; break;
        case 'Mon' : $hari = "Senin"; break;
        case 'Tue' : $hari = "Selasa"; break;
        case 'Wed' : $hari = "Rabu"; break;
        case 'Thu' : $hari = "Kamis"; break;
        case 'Fri' : $hari = "Jum'at"; break;
        case 'Sat' : $hari = "Sabtu"; break;
        default    : $hari = "Kiamat";
    }
    echo "Sekarang hari <b> $hari</b>";
    ?>