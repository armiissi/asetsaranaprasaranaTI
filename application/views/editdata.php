<div class="content">
    <?php foreach ($DataAset as $da) : ?>
        <form action="<?php echo base_url() . 'DataAset/updatedata'; ?>" method="post">

            <div class="form-group">
                <input type="hidden" name="Nomor" class="form-control" value="<?php echo $da->Nomor ?>">
            </div>

            <div class="form-group">
                <label>Jenis Aset</label>
                <input type="text" readonly name="Jenis_Aset" class="form-control" value="<?php echo $da->Jenis_Aset ?>">
            </div>

            <div class="form-group">
                <label>Merk</label>
                <input type="text" readonly name="Merk" class="form-control" value="<?php echo $da->Merk ?>">
            </div>

            <div class="form-group">
                <label>Type</label>
                <input type="text" readonly name="Type" class="form-control" value="<?php echo $da->Type ?>">
            </div>

            <div class="form-group">
                <label>Spesifikasi Teknis</label>
                <input type="text" readonly name="Spesifikasi_Teknis" class="form-control" value="<?php echo $da->Spesifikasi_Teknis ?>">
            </div>

            <div class="form-group">
                <label>MAC Address</label>
                <input type="text" readonly name="MAC_Address" class="form-control" value="<?php echo $da->MAC_Address ?>">
            </div>

            <div class="form-group">
                <label>Tahun Perolehan</label>
                <input type="text" readonly name="Tahun_Perolehan" class="form-control" value="<?php echo $da->Tahun_Perolehan ?>">
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="Status" class="form-control">
                    <option <?php if ($da->Status == 'Terpasang') {
                                echo "selected";
                            } ?> value='Terpasang'>Terpasang</option>
                    <option <?php if ($da->Status == 'Sediaan') {
                                echo "selected";
                            } ?> value='Sediaan'>Sediaan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Lokasi Aset</label>
                <input type="text" name="Lokasi_Aset" class="form-control" value="<?php echo $da->Lokasi_Aset ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Pemasangan</label>
                <input type="date" name="Tanggal_Pemasangan" class="form-control" value="<?php echo $da->Tanggal_Pemasangan ?>">
            </div>

            <div class="form-group">
                <label>Alokasi IPv4</label>
                <input type="text" name="Alokasi_IPv4" class="form-control" value="<?php echo $da->Alokasi_IPv4 ?>">
            </div>

            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>