<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Dosen</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
              <div class="buy-now">
                  <a href="<?php echo base_url() ?>Dosen/form_insert_dosen" target="_blank" class="btn btn-info btn-buy-now">Tambah Data</a>
                </div>
                <h5 class="card-header">Dosen</h5>
                
                <div class="table-responsive text-nowrap">
                
                  <table class="table">
                    <thead>
                      <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Email Mahasiswa</th>
                        <th>Alamat</th>
                        <th>Asal SMA/Tahun Lulus</th>
                        <th>Jurusan</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                      foreach ($dt_mahasiswa as $result) {
                        
                      
                    ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $result->npm ?></strong></td>
                        <td>
                          <?php echo $result->nama_mhs ?>
                        </td>
                        <td><?php echo $result->email_mhs ?></td>
                        <td><?php echo $result->alamat_mhs ?></td>
                        <td><?php echo $result->asal_SMA."/".$result->tahun_lulus_SMA?></td>
                        <td><?php <?php if($result->kode_prodi=="TIF"){echo "Teknik Informatika";}elseif ($result->kode_prodi=="DKV") {echo "Design Komunikasi Visual";}elseif($result->kode_prodi=="TI"){echo "Teknik Industri";}else{echo "Bisnis Digital";} ?>?></td>
                        <td>
                        <?php 
                            if ($result->status_mhs=="1") {
                              ?>
                                <span class="badge bg-label-primary me-1"> <strong> <?php echo "Aktif"; ?> </strong> </span>
                              <?php
                             
                            }else{
                              ?>
                              <span class="badge bg-label-danger me-1"> <strong> <?php echo "Tidak Aktif"; ?> </strong> </span>
                            <?php
                            }
                         ?>
                         </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="<?php echo base_url() ?>Mahasiswa/form_edit_mahasiswa/<?php echo $result->id_mhs ?>" >
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>Dosen/proses_delete_mahasiswa/<?php echo $result->id_mhs ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>

                      <?php } ?>
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
 </div>