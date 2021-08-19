<div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Gambar Barang : </h3>

          
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <?php
                  if ($this->session->flashdata('pesan')) {
                      echo '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-check"></i> Sukses!</h5>';
                      echo $this->session->flashdata('pesan');
                      echo '</div>';
                  }
                  
                  
                  ?>
                
              </div>
              <!-- /.card-body -->  
            </div>
            <!-- /.card -->
          </div>