<?php

$siswa = 'Hakim';
$siswa2 = 'Ucok';
$siswa3 = 'Markowi';
$siswa4 = 'Dinda';

// Array = Tipe data yang berisikan banyak data sekaligus

$array_siswa = ['Hakim', 'Ucok', 'Markowi', 'Dinda', 2, 1.41];
echo var_dump($array_siswa);

// Index Array = urutan dalam array
var_dump($array_siswa[2]);

//menggantikan data array 

$array_siswa[] = 6;
echo var_dump(count($array_siswa));