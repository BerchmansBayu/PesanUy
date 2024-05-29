<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna");
$html = '<center><h3>Data Pengguna</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
            <th>Nama</th>
            <th>Email</th> 
            <th>Password</th>
            <th>Level</th> 
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['nama_pengguna'] . "</td>
                <td>" . $transaction['waktu_pesanan'] . "</td>
                <td>" . $transaction['harga'] . "</td>
                <td>" . $transaction['total'] . "</td>
                <td>" . $transaction['status'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-pesanan.pdf');
?>
