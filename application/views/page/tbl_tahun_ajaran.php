<div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data /</span> Tahun Ajaran</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
              <div class="buy-now">
                  <a href="<?php echo base_url() ?>Tahun_ajaran/form_insert_thn_ajar" target="_blank" class="btn btn-info btn-buy-now">Tambah Data</a>
                </div>
                <h5 class="card-header">Tahun Ajaran</h5>
                
                <div class="table-responsive text-nowrap">
                
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Tahun Ajar</th>
                        <th>Semester</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php 
                      foreach ($dt_thn_ajar as $result) {
                        
                      
                    ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $result->tahun_ajaran ?></strong></td>
                        <td>
                          <?php echo $result->semester ?>
                        </td>
                        <td>
                        <?php 
                            if ($result->status=="1") {
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
                              <a class="dropdown-item" href="<?php echo base_url() ?>Tahun_ajaran/form_edit_thn_ajar/<?php echo $result->id ?>" >
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </a>
                              <a class="dropdown-item" href="<?php echo base_url() ?>Tahun_ajaran/delete_thn_ajar/ <?php echo $result->id ?>"><i class="bx bx-trash me-1"></i> Delete</a>
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