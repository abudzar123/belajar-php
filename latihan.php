<?php
$siswa1 = 82;
$siswa2 = 75;
$siswa3 = 60;
$kkm = 80;
$min_kkm = 60;

if($siswa1>=$kkm) {
    echo "siswa 1 lulus\n";
} elseif($siswa1>$min_kkm && $siswa1<=$kkm) {
    echo "siswa 1 cukup\n";
} else { 
    echo "siswa 1 tidak lulus\n";
}

if($siswa2>=$kkm) {
    echo "siswa 2 lulus\n";
} elseif($siswa2>$min_kkm && $siswa2<=$kkm) {
    echo "siswa 2 cukup\n";
} else { 
    echo "siswa 2 tidak lulus\n";
}

if($siswa3>=$kkm) {
    echo "siswa 3 lulus\n";
} elseif($siswa3>$min_kkm && $siswa3<=$kkm) {
    echo "siswa 3 cukup\n";
} else { 
    echo "siswa 3 tidak lulus\n";
}

for($bil = 1; $bil <= 10; $bil++) {
    if(($bil % 2) == 0) {
        echo "$bil adalah bilangan genap\n";
    } else {
        echo "$bil adalah bilangan ganjil\n";
    }
}
