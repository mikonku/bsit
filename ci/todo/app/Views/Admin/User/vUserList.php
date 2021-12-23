<!-- Main content -->
<section class="content">
  
  <!-- Default box -->
  <div class="card">
    <div class="card-header">


      <div class="d-flex align-items-center justify-content-between">
        <div>
          <h3 class="card-title">List User</h3>
        </div>
        
        <div>
          <a href="<?= base_url("adduser") ?>" class="btn btn-info">Tambah Data</a>
        </div>
      </div>
        </div>
        <div class="card-body">
        

        <?php 
            $session = session();
            $success = $session->getFlashdata('success');
        ?>


        <?php if ($success) { ?>
            <div class="raw" style="margin: 20px;">
                <div class="alert alert-success">
                <?php echo($success) ?>
                </div>
            </div>
        <?php } ?>
        

        <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data_user as $data_users) { ?>
                     <tr>
                        <td><?= $data_users['email'] ?></td>
                        <td><?= $data_users['username'] ?></td>
                        <td><?= $data_users['fullname'] ?></td>
                        <td><?= $data_users['id_user_level'] ?></td>
                        <td><?= $data_users['is_aktif'] ?></td>
                        <td>

                        <div class="d-flex align-items-center justify-content-around">
                          
                          <div>
                            <a href="<?= base_url("user/edit/".$data_users['id_users']) ?>" class="btn btn-warning btn-info" style="width: 6em;" >Edit</a>
                          </div>

                          <div>
                            <a href="<?= base_url("user/delete/".$data_users['id_users']) ?>" class="btn btn-danger btn-info" style="width: 6em;">Hapus</a>
                          </div>

                        </div>

                        </td>
                      </tr>
                    <?php } ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <!-- <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td> -->
                  </tr>
                  </tfoot>
                </table>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!-- Footer -->
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->