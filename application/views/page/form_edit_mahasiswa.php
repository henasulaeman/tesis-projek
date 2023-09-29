<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Mahasiswa</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                
                
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Mahasiswa</h5>
                      <small class="text-muted float-end">Tambah Mahasiswa</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url() ?>Mahasiswa/proses_update_mahasiswa//<?php echo $dt_mahasiswa['id_mhs'] ?>" method="POST">
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">NPM</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="npm" value="<?php echo $dt_mahasiswa["npm"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="NPM Mahasiswa" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                       <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Mahasiswa</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="nama_mhs" value="<?php echo $dt_mahasiswa["nama_mhs"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Nama Mahasiswa" aria-label="John Doe">
                            </div>
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Email Mahasiswa</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="email_mhs" value="<?php echo $dt_mahasiswa["email_mhs"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Email Mahasiswa" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Alamat Mahasiswa</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="alamat_mhs" value="<?php echo $dt_mahasiswa["alamat_mhs"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Alamat Mahasiswa" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Asal SMA</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="asal_SMA" value="<?php echo $dt_mahasiswa["asal_SMA"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Asal SMA" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                       <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tahun Lulus  SMA</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="tahun_lulus_SMA" value="<?php echo $dt_mahasiswa["tahun_lulus_SMA"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Tahun Lulus  SMA" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                     <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Jurusan/Prodi</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="kode_prodi" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
                              <option>Pilih Prodi</option>
                              <?php foreach ($dt_prodi as $row) {
                                // code...
                              ?>
                                <option value="<?php echo $row->kode_prodi ?>"><?php echo $row->nama_prodi ?></option>
                              <?php }?>
                              </select>
                            </div>
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Status</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="status_mhs" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
                              <option>Status</option>
                               <option value="1" <?php $status=$dt_mahasiswa["status_mhs"]; if($status=="1"){echo " selected=true";}?>>Aktif</option>
                                <option value="0" <?php $status=$dt_mahasiswa["status_mhs"]; if($status=="0"){echo " selected=true";}?> >Tidak Aktif</option>
                              </select>
                            </div>
                          </div>
                      </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>