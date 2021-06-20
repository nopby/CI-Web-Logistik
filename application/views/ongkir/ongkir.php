<main class="page payment-page">
        <section class="clean-block payment-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Cek Harga</h2>
                    <p>Silahkan Isi Detail Barang Anda</p>
                </div>
                
                <div class="container">           
                    <div class="row ">               
                        <div class="col-md-3">
                            <?php if(validation_errors()): ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= validation_errors();?>
                                </div>
                            <?php endif;?>
                        </div>               
                        <div class="col-md-6">  
                            <div class="card">
                            
                            <form action="<?= base_url('ongkir/cek') ?>" method="post">
                                <div class="card-body">
                                    <div class="form-group ">   
                                        <label class="">Asal</label>   
                                        <input id="asal" type="text" value="" name="asal" class="form-control" placeholder="Write province">   
                                    </div>
                                    <div class="form-group ">   
                                        <label class="">Tujuan</label>   
                                        <input id="tujuan" type="text" value="" name="tujuan" class="form-control" placeholder="Write province">   
                                    </div>
                                    <div class="form-group ">   
                                        <label class="">Berat</label>   
                                        <input id="berat" type="text" value="" name="berat" class="form-control" placeholder="Kg">   
                                    </div>
                                    <div class="form-group ">   
                                        <label class="">Dimensi</label>   
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <input id="length" type="text" value="" name="length" class="form-control" placeholder="L">
                                            </div>   
                                            <div class="col-sm-3">
                                                <input id="width" type="text" value="" name="width" class="form-control" placeholder="W">
                                            </div>   
                                            <div class="col-sm-3">
                                                <input id="height" type="text" value="" name="height" class="form-control" placeholder="H">
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <div class="col-lg-8">
                                                
                                            </div>
                                            <div class="col">
                                                <button name="submit" id="submit" class="btn btn-primary">Cek Harga</button> 
                                            </div>
                                        </div>
                                    </div>
                                </div>            
                            </form>
                            </div>  
                        </div>              
                        <div class="col-md-3">
                                                
                        </div>           
                    </div>       
                </div>                  
            </div>
            <?php if($cek==true): ?>
                <div class="container" style="margin-top: 30px">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Layanan</th>
                                        <th>Asal</th>
                                        <th>Tujuan</th>
                                        <th>Berat</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($detail_ongkir as $i): ?>
                                        <tr>
                                            <td><?= $i['layanan'] ?></td>
                                            <td><?= $i['asal'] ?></td>
                                            <td><?= $i['tujuan'] ?></td>
                                            <td><?= $i['berat'] ?></td>
                                            <td><?= $i['total'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            

        </section>
    </main>