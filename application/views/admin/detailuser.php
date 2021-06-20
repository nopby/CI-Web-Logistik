


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4"><?= $title ?></h1>
          

              <div class="row">
                <div class="col-lg-5">
                    <a href="">
                        <img src="<?= base_url('assets/img/Profile/').$detailUser['image'];?>" class="profile-image" alt="<?= $detailUser['fullname'] ?>" title="<?= $detailUser['fullname']?>">
                    </a>
                </div>
                <div class="col-lg-6">
                  <div>
                    <h4>General Info</h4>
                    <table class="table">
                      <tr>
                        <td><b>Full Name</b></td>
                        <td><?= $detailUser['fullname']?></td>
                      </tr>
                      <tr>
                        <td><b>Gender</b></td>
                        <td><?= $detailUser['gender']?></td>
                      </tr>
                      <tr>
                        <td><b>Religion</b></td>
                        <td><?= $detailUser['religion']?></td>
                      </tr>
                      <tr>
                        <td><b>Address</b></td>
                        <td><?= $detailUser['address']?></td>
                      </tr>
                      <tr>
                        <td><b>E-mail</b></td>
                        <td><?= $detailUser['email']?></td>
                      </tr>
                      <tr>
                        <td><b>Phone</b></td>
                        <td><?= $detailUser['phone']?></td>
                      </tr>
                      <tr>
                    </table>
                  </div>
                </div> 
              </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

