<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Tahun Ajaran</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                
                
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Tahun Ajaran</h5>
                      <small class="text-muted float-end">Tambah Tahun Ajaran</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url() ?>Tahun_ajaran/proses_update_thn_ajar/<?php echo $dt_thn_ajar['id'] ?>" method="POST">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tahun Ajaran</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                              <input type="text" name="thn_ajar" value="<?php echo $dt_thn_ajar["tahun_ajaran"]?>" class="form-control" id="basic-icon-default-fullname" placeholder="Tahun ajaran" aria-label="John Doe">
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Status</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="status_thn_ajar" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
                              <option>Status</option>
                                <option value="1" <?php $status=$dt_thn_ajar["status"]; if($status=="1"){echo " selected=true";}?>>Aktif</option>
                                <option value="0" <?php $status=$dt_thn_ajar["status"]; if($status=="0"){echo " selected=true";}?> >Tidak Aktif</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Semester</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <select name="semester" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
                               <option value="Ganjil">Semester</option>
                                <option value="Ganjil" <?php if($dt_thn_ajar["semester"]=="Ganjil"){ echo "selected=true";} ?>>Ganjil</option>
                                <option value="Genap" <?php if($dt_thn_ajar["semester"]=="Genap"){ echo "selected=true";} ?>>Genap</option>
                              </select>
                              
                            </div>
                            <div class="form-text">You can use letters, numbers &amp; periods</div>
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