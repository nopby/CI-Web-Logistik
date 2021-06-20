
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Hot News</h2>
                    <p>Berita Terhangat Dari Rekan Bisnis Kami Di Seluruh Penjuru Indonesia.</p>
                </div>
                <div class="block-content">
                    <?php foreach($news as $i): ?>
                        <div class="clean-blog-post">
                            <div class="row">
                                <div class="col-lg-5"><img class="rounded img-fluid" src="<?=base_url('assets/img/thumb/'.$i['thumb'])?>"></div>
                                <div class="col-lg-7">
                                    <h3><?php echo $i['title']?></h3>
                                    <div class="info"><span class="text-muted"><?php echo $i['date']?> by&nbsp;<a href="#"><?= $i['author']?></a></span></div>
                                    <p><?php echo $i['description']?></p>
                                    <a href="<?= base_url()?>news/read/<?= $i['id']?>" class="btn btn-outline-primary btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>