<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span>Dosen</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                
                
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Dosen</h5>
                      <small class="text-muted float-end">Tambah Dosen</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo base_url() ?>Dosen/proses_insert_dosen" method="POST">
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Kode Dosen</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="kode_dosen" class="form-control" id="basic-icon-default-fullname" placeholder="Kode Dosen" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                       <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Dosen</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="nama_dosen" class="form-control" id="basic-icon-default-fullname" placeholder="Nama Dosen" aria-label="John Doe">
                            </div>
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Email Dosen</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="email_dosen" class="form-control" id="basic-icon-default-fullname" placeholder="Email Dosen" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Alamat Dosen</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="text" name="alamat_dosen" class="form-control" id="basic-icon-default-fullname" placeholder="Alamat Dosen" aria-label="John Doe">
                            </div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Tahun Masuk</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-file"></i></span>
                              <input type="date" name="tahun_masuk" class="form-control" id="basic-icon-default-fullname" placeholder="Tahun Masuk" aria-label="John Doe">
                            </div>
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Status</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-edit-alt"></i></span>
                              <select name="status_dosen" id="basic-icon-default-company" class="form-control" aria-describedby="basic-icon-default-company2">
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