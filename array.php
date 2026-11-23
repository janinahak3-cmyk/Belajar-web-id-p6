<?php

// NOMOR 1: Array multidimensi
$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982],
];

echo "<h3>Nomor 1: Jumlah Buku</h3>";
echo "Jumlah buku: " . count($buku);

// NOMOR 2: print_r
echo "<h3>Nomor 2: Isi Array</h3>";
echo "<pre>";
print_r($buku);
echo "</pre>";

// NOMOR 5: Tambah buku baru
$buku[] = [
    "judul" => "Negeri 5 Menara",
    "pengarang" => "Ahmad Fuadi",
    "tahun" => 2009
];

// NOMOR 4: Urutkan berdasarkan tahun
usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);

// NOMOR 3: Tabel HTML
echo "<h3>Daftar Buku</h3>";
echo "Jumlah buku sekarang: " . count($buku);

echo "<table border='1' cellpadding='6'>";
echo "<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
      </tr>";

foreach ($buku as $i => $b) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $b['judul'] . "</td>";
    echo "<td>" . $b['pengarang'] . "</td>";
    echo "<td>" . $b['tahun'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
