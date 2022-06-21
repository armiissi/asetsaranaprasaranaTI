<div class="content">

    <table class="table">
        <tr>
            <th>Jenis Aset</th>
            <td><?php echo $detail->Jenis_Aset ?></td>
        </tr>
        <tr>
            <th>Merk</th>
            <td><?php echo $detail->Merk ?></td>
        </tr>
        <tr>
            <th>Type</th>
            <td><?php echo $detail->Type ?></td>
        </tr>
        <tr>
            <th>Spesifikasi Teknis</th>
            <td><?php echo $detail->Spesifikasi_Teknis ?></td>
        </tr>
        <tr>
            <th>MAC Address</th>
            <td><?php echo $detail->MAC_Address ?></td>
        </tr>
        <tr>
            <th>Tahun Perolehan</th>
            <td><?php echo $detail->Tahun_Perolehan ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td><?php echo $detail->Status ?></td>
        </tr>
        <tr>
            <th>Lokasi Aset</th>
            <td><?php echo $detail->Lokasi_Aset ?></td>
        </tr>
        <tr>
            <th>Tanggal Pemasangan</th>
            <td><?php echo $detail->Tanggal_Pemasangan ?></td>
        </tr>
        <tr>
            <th>Alokasi IPv4</th>
            <td><?php echo $detail->Alokasi_IPv4 ?></td>
        </tr>
    </table>
    <a href="<?php echo base_url('DataAset/index'); ?>" class="btn btn-primary">Kembali</a>
</div>