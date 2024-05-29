<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_pesanan INNER JOIN tb_rute ON tb_rute.id_rute=tb_pesanan.id_rute INNER JOIN tb_pengguna ON tb_pengguna.id_pengguna=tb_pesanan.id_pengguna");
$html = '<center><h3>Data Pesanan</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
            <th>Pembeli</th>
            <th>Waktu</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Status</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['nama_pengguna'] . "</td>
                <td>" . $transaction['email_pengguna'] . "</td>
                <td>" . $transaction['password'] . "</td>
                <td>" . $transaction['level'] . "</td>
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
$dompdf->stream('laporan-pengguna.pdf');
?>
