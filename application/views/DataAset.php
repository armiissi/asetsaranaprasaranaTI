  <div class="content">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#tambah_data">Tambah Data</button>
                  </div>
                  <!-- tabel -->
                  <div class="card-body">
                      <table class="table">
                          <thead class=" text-primary">
                              <tr>
                                  <th>NO</th>
                                  <th>JENIS ASET</th>
                                  <th>MERK</th>
                                  <th>TYPE</th>
                                  <th>TAHUN PEROLEHAN</th>
                                  <th>STATUS</th>
                                  <th>LOKASI ASET</th>
                                  <th class="text-center" colspan="3">AKSI</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                $no = 1;
                                foreach ($DataAset as $da) : ?>
                                  <tr>
                                      <td><?php echo $no++ ?></td>
                                      <td><?php echo $da->Jenis_Aset ?></td>
                                      <td><?php echo $da->Merk ?></td>
                                      <td><?php echo $da->Type ?></td>
                                      <td><?php echo $da->Tahun_Perolehan ?></td>
                                      <td><?php echo $da->Status ?></td>
                                      <td><?php echo $da->Lokasi_Aset ?></td>
                                      <td><?php echo anchor('DataAset/detail/' . $da->Nomor, '<div class= "btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                                      <td><?php echo anchor('DataAset/editdata/' . $da->Nomor, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></li></div>') ?></td>
                                      <td onclick="javascript: return confirm('Anda yakin ingin menghapus data ini?')">
                                          <?php echo anchor('DataAset/hapusdata/' . $da->Nomor, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></li></div>') ?></td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
                  <!-- end tabel -->
                  <!-- dropdown tambah data -->
                  <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h4 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h4>
                              </div>
                              <div class="modal-body">
                                  <form action="<?php echo base_url() . 'DataAset/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">

                                      <div class="form-group">
                                          <label for="Jenis_Aset">Jenis Aset</label>
                                          <input type="text" name="Jenis_Aset" class="form-control" id="Jenis_Aset">
                                      </div>
                                      <div class="form-group">
                                          <label for="Merk">Merk</label>
                                          <input type="text" name="Merk" class="form-control" id="Merk">
                                      </div>
                                      <div class="form-group">
                                          <label for="Type">Type</label>
                                          <input type="text" name="Type" class="form-control" id="Type">
                                      </div>
                                      <div class="form-group">
                                          <label for="Spesifikasi_Teknis">Spesifikasi Teknis</label>
                                          <input type="text" name="Spesifikasi_Teknis" class="form-control" id="Spesifikasi_Teknis">
                                      </div>
                                      <div class="form-group">
                                          <label for="MAC_Address">MAC Address</label>
                                          <input type="text" name="MAC_Address" class="form-control" id="MAC_Address">
                                      </div>
                                      <div class="form-group">
                                          <label for="Tahun_Perolehan">Tahun Perolehan</label>
                                          <input type="text" name="Tahun_Perolehan" class="form-control" id="Tahun_Perolehan">
                                      </div>
                                      <div class="form-group">
                                          <label for="inputState">Status</label>
                                          <select name="Status" id="inputState" class="form-control">
                                              <option selected>Terpasang</option>
                                              <option>Sediaan</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="Lokasi_Aset">Lokasi Aset</label>
                                          <input type="text" name="Lokasi_Aset" class="form-control" id="Lokasi_Aset">
                                      </div>
                                      <div class="form-group">
                                          <label for="Tanggal_Pemasangan">Tanggal Pemasangan</label>
                                          <input type="date" name="Tanggal_Pemasangan" class="form-control" id="Tanggal_Pemasangan">
                                      </div>
                                      <div class="form-group">
                                          <label for="Alokasi_IPv4">Alokasi IPv4</label>
                                          <input type="text" name="Alokasi_IPv4" class="form-control" id="Alokasi_IPv4">
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-info">Simpan</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End Dropdown -->
              </div>
          </div>

      </div>
  </div>