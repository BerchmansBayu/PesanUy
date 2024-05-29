<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_bus");
$html = '<center><h3>Data Bus</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Kode Bus</th>
                <th>Nama Bus</th>
                <th>Kelas</th>
                <th>Jumlah Kursi</th>
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['kode_bus'] . "</td>
                <td>" . $transaction['nama_bus'] . "</td>
                <td>" . $transaction['kelas_bus'] . "</td>
                <td>" . $transaction['jumlah_kursi'] . "</td>
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
$dompdf->stream('laporan-bus.pdf');
?>
