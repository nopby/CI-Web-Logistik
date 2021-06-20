
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4"><?= $title;?></h1>
          <div class="row">
            <form action="<?= base_url('admin/cariUser') ?>" method="post">
              <div class="form-row ml-3">
                  <div class="form-group mr-2">
                    <button class="btn btn-primary" type="submit" name="submit" >Cari</button>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="keyword" id="keyword" placeholder="ID/Username/Email/Active">
                  </div>
              </div>
            </form>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Active</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 0; foreach($users as $i): ?>
                        <tr>
                          <td><?php $count++; echo $count ?></td>
                          <td><?= $i['id'] ?></td>
                          <td><?= $i['username'] ?></td>
                          <td><?= $i['email'] ?></td>
                          <td><?= $i['is_active'] ?></td>
                          <td>
                            <?php if($i['level'] == 1):?>
                              <a class="badge badge-primary" href="<?= base_url('admin/detailUser/'.$i['id']) ?>">Detail</a>
                            <?php else: ?>
                              <a class="badge badge-primary" href="<?= base_url('admin/detailUser/'.$i['id']) ?>">Detail</a>
                            <?php if($i['is_active'] == 0): ?>
                              <a class="badge badge-warning" href="<?= base_url('admin/activateUser/'.$i['id']) ?>">Aktifkan</a>
                            <?php else:?>
                              <a class="badge badge-warning" href="<?= base_url('admin/nonactiveUser/'.$i['id']) ?>">Non Aktif</a>
                            <?php endif; ?>
                              <a class="badge badge-danger" href="<?= base_url('admin/deleteUser/'.$i['id']) ?>">Delete</a>
                            <?php endif; ?>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      