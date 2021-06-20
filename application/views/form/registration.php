
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Register</h2>
                    <p>Terima Kasih Untuk Mau Mencoba Menjadi Anggota Kami</p>
                </div>
                <form action="<?= base_url('auth/registration')?>" method="post">
                    <?php if($this->session->flashdata('flash')):?>
                        <?= $this->session->flashdata('flash')?>
                        
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control item" type="text" id="username" name="username" value="<?= set_value('username') ?>">
                        <small class="text-danger"><?= form_error('username'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control item" type="password" id="password" name="password">
                        <small class="text-danger"><?= form_error('password'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input class="form-control item" type="password" id="cpassword" name="cpassword">
                        <small class="text-danger"><?= form_error('cpassword'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control item" type="email" id="email" name="email" value="<?= set_value('email') ?>">
                        <small class="text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    <p>Already have an account? <a href="<?php echo base_url('auth/login')?>"> Click here to login.</a></p>
                </form>
            </div>
        </section>
    </main>