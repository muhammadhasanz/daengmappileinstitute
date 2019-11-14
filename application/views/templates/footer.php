<div class="bawah">
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <p>&copy; 2014 Hak Cipta Dilindungi. Develop oleh <a href="http://daengmappileinstitute.ga/">Daeng Mappile Institute</a></p>
                </div>
                <div class="col-md-7 col-sm-6">
                    <ul class="list list-inline pull-right">
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="kabar-sekolah.html">Kabar Sekolah</a></li>
                        <li><a href="galeri.html">Galeri</a></li>
                        <li><a href="buku-tamu.html">Buku Tamu</a></li>
                        <li><a href="#top">Kembali Ke Atas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Penutup Bagian Bawah -->
</div>

<!-- Koleksi Javascript -->
<script type="text/javascript" src="<?= base_url(); ?>assets/src/paket/js/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/src/paket/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/src/paket/js/less.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/src/paket/js/jquery.main.js"></script>
<!--[if lte IE 9 ]>
			<script type="text/javascript" src="assets/src/paket/js/modernizr-1.7.min.js"></script>
			<script type="text/javascript" src="assets/src/paket/js/placeholder.js"></script>
		<![endif]-->
<script src="<?= base_url(); ?>assets/src/paket/js/jquery.onecarousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        "use strict";
        $('#onebyone_carousel').oneCarousel({
            easeIn: 'rotateIn',
            interval: 5000,
            responsive: true,
            height: 410,
            minHeight: 410,
            pause: 'hover'
        });
    });
</script>
</body>

</html>