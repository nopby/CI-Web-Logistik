
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>Selamat Datang Para Exprezzer !</p>
                </div>
                <form method="post" action="<?= base_url('auth/login'); ?>">
                    <?php if($this->session->flashdata('flash')):?>
                        <?= $this->session->flashdata('flash')?>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control item" type="text" id="username" name="username" value="<?= set_value('username') ?>">
                        <small class="text-danger"><?= form_error('username') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                        <small class="text-danger"><?= form_error('password') ?></small>
                    </div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox">
                            <label class="form-check-label" for="checkbox">Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                    <p>Not yet registered? <a href="<?php echo base_url('auth/register')?>"> Click here to register.</a></p>
                </form>
            </div>
        </section>
    </main>