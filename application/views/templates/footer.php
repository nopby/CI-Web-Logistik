<?php if($login == true): ?>
    <!-- Footer -->
    <footer class="sticky-footer bg-gray-900">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Send Exprezz <?= date('Y')?></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url('auth/logout')?>">Logout</a>
            </div>
        </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>vendor/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js')?>"></script>

    <script>
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

<?php endif;?>



<?php if($login == false):?>
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="<?php echo base_url('home')?>">Home</a></li>
                        <li><a href="<?php echo base_url('auth/register')?>">Sign up</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        
                        <li><a href="<?php echo base_url('contact')?>">Contact us</a></li>
                        <li><a href="<?php echo base_url('auth/register')?>">Join Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="<?php echo base_url('faq')?>">FAQ</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Layanan</h5>
                    <ul>
                        <li><a href="<?php echo base_url('service')?>">Regular</a></li>
                        <li><a href="<?php echo base_url('service')?>">Flash</a></li>
                        <li><a href="<?php echo base_url('service')?>">Exprezz</a></li>
                        <li><a href="<?php echo base_url('service')?>">Blitzkrieg</a></li>
                        <li><a href="<?php echo base_url('service')?>">Super Exprezz</a></li>
                        <li><a href="<?php echo base_url('service')?>">Exprezz Dhuafa</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright &copy; Send Exprezz <?= date('Y')?></p>
        </div>
    </footer>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/smoothproducts.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js')?>"></script>

<?php endif; ?>
</body>

</html>
