<script>
    function set($id,$layanan,$pengirim,$penerima,$asal,$tujuan,$berat){
        $('#mkid').val($id);
        $('#mklayanan').val($layanan);
        $('#mkpengirim').val($pengirim);
        $('#mkpenerima').val($penerima);
        $('#mkasal').val($asal);
        $('#mktujuan').val($tujuan);
        $('#mkberat').val($berat);
    }
    function up($id,$layanan,$pengirim,$penerima,$asal,$tujuan,$berat,$ukuran){
        $('#upmid').val($id);
        $('#upmlayanan').val($layanan);
        $('#upmpengirim').val($pengirim);
        $('#upmpenerima').val($penerima);
        $('#upmasal').val($asal);
        $('#upmtujuan').val($tujuan);
        $('#upmberat').val($berat);
        $('#upmukuran').val($ukuran);
    }
    function upk($id,$no_kurir){
        $('#upkid').val($id);
        $('#upkno_kurir').val($no_kurir);
    }
</script>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg mb-3">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4"><?= $title ?> Masuk</h1>

                    <!-- item -->
                    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newItemModal">+ Item</a>
                    <a href="<?= base_url('report') ?>" class="btn btn-primary mb-3""> Report</a>

                    <div class="card">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">Pengirim</th>
                                    <th scope="col">Penerima</th>
                                    <th scope="col">Asal</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Berat(Kg)</th>
                                    <th scope="col">Ukuran</th>
                                    <th scope="col">Tgl Masuk</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                <?php foreach($item_masuk as $i): ?>
                                <tr>
                                    <th scope="row"><?= $count; $count++ ?></th>
                                        <td><?= $i['layanan'] ?></td>
                                        <td><?= $i['pengirim'] ?></td>
                                        <td><?= $i['penerima'] ?></td>
                                        <td><?= $i['asal'] ?></td>
                                        <td><?= $i['tujuan'] ?></td>
                                        <td><?= $i['berat'] ?></td>
                                        <td><?= $i['ukuran'] ?></td>
                                        <td><?= $i['tgl_masuk'] ?></td>
                                        <td>
                                            <a href="#" onclick="up('<?= $i['id']?>',
                                            '<?= $i['id_layanan']?>',
                                            '<?= $i['pengirim']?>',
                                            '<?= $i['penerima']?>',
                                            '<?= $i['asal']?>',
                                            '<?= $i['tujuan']?>',
                                            '<?= $i['berat']?>',
                                            '<?= $i['ukuran']?>')"class="badge badge-success" data-toggle="modal" data-target="#updateItemMasuk">Edit</a>

                                            <a href="<?= base_url('admin/deleteItemMasuk/'.$i['id'])?>" class="badge badge-danger">Delete</a>

                                            <a href="#" onclick="set('<?= $i['id']?>',
                                            '<?= $i['id_layanan']?>',
                                            '<?= $i['pengirim']?>',
                                            '<?= $i['penerima']?>',
                                            '<?= $i['asal']?>',
                                            '<?= $i['tujuan']?>',
                                            '<?= $i['berat']?>')"class="badge badge-warning" data-toggle="modal" data-target="#ItemKeluar">Keluar</a>
                                        </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-3">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif; ?>
                    <?= form_error('menu','<div class="alert alert-danger alert-dismissible fade show" role="alert">', '</div>')?>
                    <?= $this->session->flashdata('flash');?>
                </div>
                <div class="col-lg-8">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4"><?= $title ?> Keluar</h1>
                    
                    <!-- item keluar -->

                    <div class="card mb-4">
                    
                    <?= $this->session->flashdata('subflash');?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">Pengirim</th>
                                    <th scope="col">Penerima</th>
                                    <th scope="col">Asal</th>
                                    <th scope="col">Tujuan</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">No Kurir</th>
                                    <th scope="col">Tgl Keluar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                <?php foreach($item_keluar as $i): ?>
                                <tr>
                                    <th scope="row"><?= $count; $count++ ?></th>
                                        <td><?= $i['layanan'] ?></td>
                                        <td><?= $i['pengirim'] ?></td>
                                        <td><?= $i['penerima'] ?></td>
                                        <td><?= $i['asal'] ?></td>
                                        <td><?= $i['tujuan'] ?></td>
                                        <td><?= $i['berat'] ?></td>
                                        <td><?= $i['no_kurir'] ?></td>
                                        <td><?= $i['tgl_keluar'] ?></td>
                                        <td>
                                            <a href="#" onclick="upk(
                                              '<?= $i['id'] ?>',
                                              '<?= $i['no_kurir'] ?>'
                                              )" class="badge badge-success" data-toggle="modal" data-target="#updateItemKeluar">Edit</a>
                                            <a href="<?= base_url('admin/deleteItemKeluar/'.$i['id'])?>" class="badge badge-danger">Delete</a>
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
      <!-- Button trigger modal -->

    <!-- new Item Modal -->
    <div class="modal fade" id="newItemModal" tabindex="-1" role="dialog" aria-labelledby="newItemModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="newItemModal">Add Item</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('admin/newItemMasuk') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                  <select id="layanan" class="form-control mb-3" name="layanan">
                      <option value="">Pilih Layanan</option>
                      <option value="1">Regular</option>
                      <option value="2">Flash</option>
                      <option value="3">Exprezz</option>
                      <option value="4">Blitzkrieg</option>
                      <option value="5">Super Exprezz</option>
                      <option value="6">Exprezz Dhuafa</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="pengirim" placeholder="Nama pengirim" name="pengirim">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="penerima" placeholder="Nama penerima" name="penerima">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="asal" placeholder="Asal" name="asal">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="tujuan" placeholder="Tujuan" name="tujuan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="berat" placeholder="Berat" name="berat">
                </div>
                <div class="form-group">
                    <select id="ukuran" class="form-control mb-3" name="ukuran">
                            <option value="">Pilih Ukuran</option>
                            <option value="Besar">Besar</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Kecil">Kecil</option>
                    </select>
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

    <!-- update Item Modal -->
    <div class="modal fade" id="updateItemMasuk" tabindex="-1" role="dialog" aria-labelledby="updateItemMasuk" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="updateItemMasuk">Edit Item Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('admin/updateItemMasuk') ?>" method="post">
            <div class="modal-body">
                <input type="hidden" class="form-control" id="upmid" name="upmid" value="">
                <div class="form-group">
                  <select id="upmlayanan" class="form-control mb-3" name="upmlayanan">
                      <option value="">Select Menu</option>
                      <option value="1">Regular</option>
                      <option value="2">Flash</option>
                      <option value="3">Exprezz</option>
                      <option value="4">Blitzkrieg</option>
                      <option value="5">Super Exprezz</option>
                      <option value="6">Exprezz Dhuafa</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="upmpengirim" placeholder="Nama pengirim" name="upmpengirim" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="upmpenerima" placeholder="Nama penerima" name="upmpenerima" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="upmasal" placeholder="Asal" name="upmasal" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="upmtujuan" placeholder="Tujuan" name="upmtujuan" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="upmberat" placeholder="Berat" name="upmberat" value="">
                </div>
                <div class="form-group">
                    <select id="upmukuran" class="form-control mb-3" name="upmukuran">
                            <option value="">Select Menu</option>
                            <option value="Besar">Besar</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Kecil">Kecil</option>
                    </select>
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

    <!-- masuk-keluar Modal -->
    <div class="modal fade" id="ItemKeluar" tabindex="-1" role="dialog" aria-labelledby="ItemKeluar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ItemKeluar">Pindah Item</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="<?= base_url('admin/itemMasukKeluar/') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" id="mkid" name="mkid" value="">
                    <input type="hidden" id="mklayanan" name="mklayanan" value="">
                    <input type="hidden" id="mkpengirim" name="mkpengirim" value="">
                    <input type="hidden" id="mkpenerima" name="mkpenerima" value="">
                    <input type="hidden" id="mkasal" name="mkasal" value="">
                    <input type="hidden" id="mktujuan" name="mktujuan" value="">
                    <input type="hidden" id="mkberat" name="mkberat" value="">
                    <input type="text" class="form-control" id="mkno_kurir" placeholder="No Kurir" name="mkno_kurir" value="">
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

    <!-- update Keluar Modal -->
    <div class="modal fade" id="updateItemKeluar" tabindex="-1" role="dialog" aria-labelledby="updateItemKeluar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateItemKeluar">Edit Item Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/updateItemKeluar') ?>" method="post">
                <div class="modal-body">
                  <div class="form-group">
                      <input type="text" class="form-control" id="upkno_kurir" placeholder="No Kurir" name="upkno_kurir" value="">
                      <input type="hidden" class="form-control" id="upkid" name="upkid" value="">
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

      