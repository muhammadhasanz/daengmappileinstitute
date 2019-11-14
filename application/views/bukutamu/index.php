<div class="tengah" id="main">

    <div class="judul-halaman">
        <div class="container">
            <h1>Buku Tamu</h1>
        </div>
    </div>

    <div class="hold-breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb-site">
                <li><a href="index.html">Beranda</a></li>
                <li class="active">Buku Tamu</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-6">

                <iframe class="box-address" style="background:white" width="670" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d248.35304022230463!2d119.4181879!3d-5.1601048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee2a00e60c099%3A0xaa2ec3d5cb3b0c69!2sJalan%20Macan%20No.4%2C%20Labuang%20Baji%2C%20Mamajang%2C%20Kota%20Makassar%2C%20Sulawesi%20Selatan%2090132%2C%20Indonesia!5e0!3m2!1sid!2sid!4v1573704880752!5m2!1sid!2sid"></iframe>

                <?php foreach ($pesan as $ps) : ?>
                    <blockquote class="blockquote-about">
                        <cite class="author pull-left">
                            <span class="hold-img pull-left hold-man"><img src="" width="85" height="87"></span>
                        </cite>
                        <div class="block">
                            <span class="nook">&nbsp;</span>
                            <strong class="title">
                                <small>Komentar oleh <a href="mailto:<?= $ps['email_tamu'] ?>"><?= $ps['nama_tamu'] ?></a> (<?= $ps['email_tamu'] ?>)</small>
                            </strong>
                            <q><?= $ps['pesan_tamu'] ?></q>
                        </div>
                    </blockquote>
                <?php endforeach; ?>
            </div>
            <div class="col-md-5 col-sm-6">
                <h2 style="font-family:Open Sans"><i class="fa-icon-envelope"></i> Isi Buku Tamu </h2>
                <div class="form-details" style="">
                    <form action="<?= base_url('home/pesantamu') ?>">
                        <fieldset>
                            <div class="field-text field-middle">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="field-text field-middle">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="tarea tarea-middle">
                                <textarea class="form-control" cols="8" rows="10" id="pesan" name="pesan" placeholder="Pesan"></textarea>
                            </div>
                            <button class="btn btn-info btn-details btn-blue-light" type="submit">Kirim Pesan</button>
                        </fieldset>
                    </form>
                </div>
                <div class="box-address" style="background: #0E487A;">
                    <span class="im-icon-home-3"></span>
                    <address>
                        <ul class="contacts">
                            <li>Daeng Mappile Institute</li>
                            <li>Phone : 08123456789</li>
                            <li>E-Mail: <a href="mailto:mhmmdhasanZ@gmail.com">mhmmdhasanz@gmail.com</a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
    </div>

</div>