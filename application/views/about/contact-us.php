
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Contact</h2>
                    <p>Kami Siap Menjawab Pertanyaan Anda 24 Jam</p>
                    <p>Hubungi Dan Kami Akan Cepat merespon Anda</p>
                </div>
                <form action="" method="post">
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('flash')):?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data <strong>berhasil</strong> <?= $this->session->flashdata('flash')?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="form-group"><label>Name</label><input class="form-control" type="text" name="name"></div>
                    <div class="form-group"><label>Subject</label><input class="form-control" type="text" name="subject"></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email"></div>
                    <div class="form-group"><label>Message</label><textarea class="form-control" name="message"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send</button></div>
                </form>
            </div>
        </section>
    </main>