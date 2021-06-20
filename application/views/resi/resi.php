
    <main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Cek Resi</h2>
                    <p>Silahkan Isi Nomor Resi Anda</p>
                </div>
                <form action="<?= base_url('resi/cek')?>" method="post">
                    <div class="card-details mb-3" style="min-height:300px;">
                        <?= $this->session->flashdata('flash'); ?>
                        <h3 class="title">Masukan Nomor Resi Anda</h3>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <input type="text" name="resi[]" class="form-control input-awb mb-3" placeholder="No resi">
                                <input type="text" name="resi[]" class="form-control input-awb mb-3" placeholder="No resi">
                                <input type="text" name="resi[]" class="form-control input-awb mb-3" placeholder="No resi">
                                <input type="text" name="resi[]" class="form-control input-awb mb-3" placeholder="No resi">
                                <button class="btn btn-primary btn-block" type="submit">Cek Resi</button>
                            </div>
                        </div>
                    </div>
                </form>
                <?php if($cek): ?>
                <div class="card">
                    <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Tujuan</th>
                                <th scope="col">Pengirim</th>
                                <th scope="col">Penerima</th>
                                <th scope="col">Tgl diterima</th>
                                <th scope="col">Tgl dikirim</th>
                                <th scope="col">Kurir</th>
                                <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($resi as $i): ?>
                                <tr>
                                    <th scope="row"><?= $i['kode'] ?></th>
                                    <td><?= $i['layanan'] ?></td>
                                    <td><?= $i['tujuan'] ?></td>
                                    <td><?= $i['pengirim'] ?></td>
                                    <td><?= $i['penerima'] ?></td>
                                    <td><?= $i['tgl_diterima'] ?></td>
                                    <td><?= $i['tgl_dikirim'] ?></td>
                                    <td><?= $i['no_kurir'] ?></td>
                                    <td><?= $i['status'] ?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                </div>
                <?php endif; ?>
            </div>
            
        </section>
    </main>