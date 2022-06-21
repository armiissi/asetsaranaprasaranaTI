  <div class="content">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#tambah_data">Tambah Data</button>
                  </div>
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

                              <!-- <th>
                                  Name
                              </th>
                              <th>
                                  Country
                              </th>
                              <th>
                                  City
                              </th>
                              <th class="text-right">
                                  Salary
                              </th> -->
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
                              <!-- <tr>
                                  <td>Dakota Rice</td>
                                  <td>Niger</td>
                                  <td>Oud-Turnhout</td> 
                                  <td class="text-right">$36,738</td>
                              </tr>
                              <tr>
                                  <td>
                                      Dakota Rice
                                  </td>
                                  <td>
                                      Niger
                                  </td>
                                  <td>
                                      Oud-Turnhout
                                  </td>
                                  <td class="text-right">
                                      $36,738
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Minerva Hooper
                                  </td>
                                  <td>
                                      Curaçao
                                  </td>
                                  <td>
                                      Sinaai-Waas
                                  </td>
                                  <td class="text-right">
                                      $23,789
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Sage Rodriguez
                                  </td>
                                  <td>
                                      Netherlands
                                  </td>
                                  <td>
                                      Baileux
                                  </td>
                                  <td class="text-right">
                                      $56,142
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Philip Chaney
                                  </td>
                                  <td>
                                      Korea, South
                                  </td>
                                  <td>
                                      Overland Park
                                  </td>
                                  <td class="text-right">
                                      $38,735
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Doris Greene
                                  </td>
                                  <td>
                                      Malawi
                                  </td>
                                  <td>
                                      Feldkirchen in Kärnten
                                  </td>
                                  <td class="text-right">
                                      $63,542
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Mason Porter
                                  </td>
                                  <td>
                                      Chile
                                  </td>
                                  <td>
                                      Gloucester
                                  </td>
                                  <td class="text-right">
                                      $78,615
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Jon Porter
                                  </td>
                                  <td>
                                      Portugal
                                  </td>
                                  <td>
                                      Gloucester
                                  </td>
                                  <td class="text-right">
                                      $98,615
                                  </td>
                              </tr> -->
                          </tbody>
                      </table>
                  </div>
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
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Jenis_Aset', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="Merk">Merk</label>
                                          <input type="text" name="Merk" class="form-control" id="Merk">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Merk', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="Type">Type</label>
                                          <input type="text" name="Type" class="form-control" id="Type">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Type', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="Spesifikasi_Teknis">Spesifikasi Teknis</label>
                                          <input type="text" name="Spesifikasi_Teknis" class="form-control" id="Spesifikasi_Teknis">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Spesifikasi_Teknis', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="MAC_Address">MAC Address</label>
                                          <input type="text" name="MAC_Address" class="form-control" id="MAC_Address">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('MAC_Address', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="Tahun_Perolehan">Tahun Perolehan</label>
                                          <input type="text" name="Tahun_Perolehan" class="form-control" id="Tahun_Perolehan">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Tahun_Perolehan', '<small class="text-danger pl-3">', '</small>'); ?> -->
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
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Lokasi_Aset', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="Tanggal_Pemasangan">Tanggal Pemasangan</label>
                                          <input type="date" name="Tanggal_Pemasangan" class="form-control" id="Tanggal_Pemasangan">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Tanggal_Pemasangan', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="form-group">
                                          <label for="Alokasi_IPv4">Alokasi IPv4</label>
                                          <input type="text" name="Alokasi_IPv4" class="form-control" id="Alokasi_IPv4">
                                          <div class="invalid-feedback"></div>
                                          <!-- <?= form_error('Alokasi_IPv4', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                          <button type="submit" class="btn btn-info">Simpan</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>