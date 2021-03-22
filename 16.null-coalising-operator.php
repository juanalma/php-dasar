<?php

$data = [
    'nama' => 'Juan Angela Alma'
];

$nama = $data['nama'] ?? 'data tidak ada';
$umur = $data['umur'] ?? 'data tidak ada';

echo $nama;
echo "<br>";
echo $umur;