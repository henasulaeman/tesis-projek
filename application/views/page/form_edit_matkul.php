<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Matakuliah</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                
                
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Matakuliah</h5>
                      <small class="text-muted float-end">Form Matakuliah</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url() ?>Matakuliah/proses_insert_matkul" method="POST">
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kode Matkul</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="kode_matkul" value="<?php echo $dt_matkul["kode_matkul"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Kode Prodi" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                       <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Matkul</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="nama_matkul" value="<?php echo $dt_matkul["nama_matkul"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Kode Prodi" aria-label="John Doe">
                            </div>
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Program Studi</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="kode_prodi" class="form-control" > 
                                <?php 
                                  foreach ($dt_prodi as $row) {
                                    
                                  

                                ?>
                                 <option value="1" <?php $status=$dt_matkul["kode_prodi"]; if($status=="1"){echo " selected=true";}?>>Aktif</option>
                                <option value="0" <?php $status=$dt_matkul["kode_prodi"]; if($status=="0"){echo " selected=true";}?> >Tidak Aktif</option>

                                  <option value="<?php echo $row->kode_prodi ?>"><?php echo $row->nama_prodi ?></option>
                                <?php 

                                }
                                ?>
                              </select>
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Status</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="status_matkul" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
                              <option>Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
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