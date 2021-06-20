

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4"><?= $title ?></h1>

              <div class="row">
                <div class="col-lg-5">
                    <a href="">
                        <img src="<?= base_url('assets/img/Profile/').$profile['image'];?>" class="profile-image" alt="<?= $profile['fullname'] ?>" title="<?= $profile['fullname']?>">
                    </a>
                </div>
                <div class="col-lg-6">
                  <div>
                    <h4>General Info</h4>
                    <table class="table">
                      <tr>
                        <td><b>Full Name</b></td>
                        <td><?= $profile['fullname']?></td>
                      </tr>
                      <tr>
                        <td><b>Gender</b></td>
                        <td><?= $profile['gender']?></td>
                      </tr>
                      <tr>
                        <td><b>Religion</b></td>
                        <td><?= $profile['religion']?></td>
                      </tr>
                      <tr>
                        <td><b>Address</b></td>
                        <td><?= $profile['address']?></td>
                      </tr>
                      <tr>
                        <td><b>E-mail</b></td>
                        <td><?= $profile['email']?></td>
                      </tr>
                      <tr>
                        <td><b>Phone</b></td>
                        <td><?= $profile['phone']?></td>
                      </tr>
                      <tr>
                    </table>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit Profile</button>
                  </div>
                </div> 
                
              </div>
              
              <!-- new Item Modal -->
              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="edit">Edit Profile</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <?= form_open_multipart('user/editProfile');?>
                      <div class="modal-body">
                          <div class="form-group">
                              <input type="text" class="form-control" id="fullname" placeholder="Fullname" name="fullname">
                          </div>
                          <div class="form-group">
                              <select name="gender" id="gender" class="form-control">
                                    <option value="">Gender</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Pria">Wanita</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <select id="religion" class="form-control" name="religion">
                                      <option value="">Religion</option>
                                      <option value="Islam">Islam</option>
                                      <option value="Katolik">Katolik</option>
                                      <option value="Kristen">Kristen</option>
                                      <option value="Hindu">Hindu</option>
                                      <option value="Buddha">Buddha</option>
                                      <option value="Other">Other</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
                          </div>
                          <div class="form-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label for="image" class="custom-file-label">Choose File</label>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                  </form>
                  
                  </div>
              </div>
              </div>
              

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

