<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Program Studi</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                
                
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Program Studi</h5>
                      <small class="text-muted float-end">Tambah Prodi</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url() ?>Program_studi/proses_update_prodi/<?php echo $dt_prodi['id_prodi'] ?>" method="POST">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kode Prodi</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                              <input type="text" name="kode_prodi" value="<?php echo $dt_prodi["kode_prodi"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Tahun ajaran" aria-label="John Doe">
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Prodi</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                              <input type="text" name="nm_prodi" value="<?php echo $dt_prodi["nama_prodi"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Nama Prodi" aria-label="John Doe">
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Status</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="status_prodi" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
                              <option>Status</option>
                                <option value="1" <?php $status=$dt_prodi["status_prodi"]; if($status=="1"){echo " selected=true";}?>>Aktif</option>
                                <option value="0" <?php $status=$dt_prodi["status_prodi"]; if($status=="0"){echo " selected=true";}?> >Tidak Aktif</option>
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