
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?php if($read == false): ?>
              <!-- Page Heading -->
          <h1 class="h3 mb-4"><?= $title;?></h1>
          
          <div class="row">
            <div class="col-lg-8">
              <div class="card mb-4">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Author</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $count = 1;?>
                      <?php foreach($news as $i): ?>
                        <tr>
                          <td><?= $count ; $i['id']=$count?></td>
                          <td><?= $i['title'] ?></td>
                          <td><?= $i['date'] ?></td>
                          <td><?= $i['author'] ?></td>
                          <td><img src="<?=base_url('assets/img/thumb/'.$i['thumb'])?>" alt="" class="thumb"></td>
                          <td><?= $i['date'] ?></td>
                          <td><a href="<?= base_url('admin/read/'.$i['id'])?>" class="badge badge-primary">Read More</a></td>
                          <?php $count++ ?>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
          <?php endif?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      