<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_rute INNER JOIN tb_bus ON tb_bus.id_bus=tb_rute.id_bus INNER JOIN tb_terminal ON tb_terminal.id_terminal=tb_rute.id_terminal");
$html = '<center><h3>Data Rute</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
            <th>Tanggal Berangkat</th>
            <th>Tanggal Tiba</th>
            <th>Waktu Berangkat</th>
            <th>Waktu Tiba</th>    
            <th>Asal</th>  
            <th>Tujuan</th>  
            <th>Transportasi</th>  
            <th>Harga</th>  
            </tr>';
$no = 1;
while ($transaction = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $transaction['tanggal_berangkat'] . "</td>
                <td>" . $transaction['tanggal_tiba'] . "</td>
                <td>" . $transaction['waktu_berangkat'] . "</td>
                <td>" . $transaction['waktu_tiba'] . "</td>
                <td>" . $transaction['nama_terminal'] . "</td>
                <td>" . $transaction['tujuan'] . "</td>
                <td>" . $transaction['nama_bus'] . "</td>
                <td>" . $transaction['harga'] . "</td>
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
$dompdf->stream('laporan-rute.pdf');
?>
