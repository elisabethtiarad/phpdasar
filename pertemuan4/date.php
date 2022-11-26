<?php

//echo date("l, d-M-Y"); // l menampilkan hari, d tanggal, m untuk bulan

//unix timestamp detik yang sudah berlalu sejak 1 januari 1970
//echo time();
//echo date(" d M Y", time() - 60*60*24*100);

//mktime membuat detik sendiri
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun

//echo date ("l", mktime(0,0,0,3,13,2002));

//strtotime
echo date("l",strtotime("13 march 2002"));

//string: 
//strlen= hitung panjang sebuah string
//strcmp = menggabungkan 2 buah string
//explode = memecah string menjadi array
//htmlspecialchars = menjaga dari hacker

//utility
// var_dump(), isset(), empty(), die(), sleep()
