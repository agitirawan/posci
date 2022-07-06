<h2>
    <center>Laporan Transaksi</center>
</h2>
<hr />
<table border="1" width="100%" style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Id Transaksi Detail</th>
        <th>Id Transaksi/th>
        <th>id menu</th>
        <th>jumlah</th>
    </tr>
    <?php
    $no = 1;
    foreach ($detail_transaksi as $row) {
    ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->id_transaks_detail; ?></td>
            <td><?php echo $row->id_transaksi; ?></td>
            <td><?php echo $row->menu; ?></td>
            <td><?php echo $row->menu; ?></td>
        </tr>
    <?php
    }
    ?>
</table>