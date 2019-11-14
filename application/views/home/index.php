<div class="tengah" id="main">

    <section class="gallery">
        <div id="onebyone_carousel" class="carousel slide gallery-holder">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?= base_url(); ?>assets/src/img/01_slide_1.png" alt="">
                    <div class="slide_content">
                        <div class="container gambar-gerak">
                            <div class="hold-text pull-right">
                                <strong id="kuning" class="title animate0 rotateIn" style="opacity: 0;">Selamat Datang</strong>
                                <div class="hold animate1 rotateIn" style="opacity: 0;">
                                    <p id="kuning">Ini adalah website resmi Daeng Mappile Institute. Semoga dengan adanya website ini segala dapat mempermudah memberikan informasi yang ter-<i>up-to-date.</i></p>
                                </div>
                                <a href="#kepala-sekolah" class="btn btn-default btn-lg btn-white animate2 rotateIn" style="opacity: 0;">Sambutan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.item -->

            </div>
            <a class="link-prev carousel-control" href="#onebyone_carousel" data-slide="prev"><i class="im-icon-arrow-left-4"></i></a>
            <a class="link-next carousel-control" href="#onebyone_carousel" data-slide="next"><i class="im-icon-arrow-right-5"></i></a>
        </div><!-- /.carousel -->
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6">

                <div class="container">
                    <h2 style="font-family:Open Sans, sans-serif"><i class="fa-icon-info"></i> <b>Kabar Daeng Mappile</b></h2>
                    <hr />
                    <?php foreach ($pesan as $p) : ?>
                        <div class="col-sm-12">
                            <blockquote class="blockquote-about">
                                <cite class="author pull-left">
                                    <span class="hold-img"><a href="kabar-sekolah-detail.html"><img src="" alt="image" width="85" height="87"></a></span>
                                    <small>Oleh <br> <a href="404.html">DMI Admin</a></small>
                                </cite>
                                <div class="block">
                                    <span class="nook">&nbsp;</span>
                                    <strong class="title"><a href="kabar-sekolah-detail.html"><b><?= $p['subject']; ?></b></a>
                                        <small>Terbit pada tanggal <?= date('d F Y', $p['date']); ?></small>
                                    </strong>
                                    <q><?= $p['isi_pesan']; ?></q>
                                </div>
                            </blockquote>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="crewman crewman-center">
                    <div class="frame sambutan" id="kepala-sekolah">
                        <div class="hold-line">
                            <span class="hold-img">
                                <img class="img-circle" src="<?= base_url(); ?>assets/src/img/alt-owner.png" alt="images" width="210" height="210">
                            </span>
                            <strong class="title">Owner Daeng Mappile</strong>
                            <strong class="office">Owner</strong>
                        </div>
                        <div class="hold-line">
                            <p>Assalamu'alaikum wr.wb.</p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>