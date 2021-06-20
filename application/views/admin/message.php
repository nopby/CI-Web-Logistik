
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4"><?= $title;?></h1>
          
          <div class="row">
            <div class="col-lg-8">
              <div class="card">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">From</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">At</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1 ?>
                      <?php foreach($message as $i): ?>
                      <tr>
                        <td><?= $count; $count++?></td>
                        <td><?= $i['name'] ?></td>
                        <td><?= $i['subject'] ?></td>
                        <td><?= $i['email'] ?></td>
                        <td><?= $i['message'] ?></td>
                        <td><?= $i['at'] ?></td>
                        <td><a href="<?= base_url('admin/deleteMessage/'.$i['id'])?>" class="badge badge-danger">Delete</a></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      