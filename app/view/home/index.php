<section class="homepage">
    <div class="container-custom-banner">
        <h1 class="lh-1">Magang</h1>
        <span>
            <h1 class="lh-1">Hunters</h1>
        </span>
    </div>

    <div class="container-custom-subbanner">
        <div class="subbaner">
            <h2>Temukan lowongan magang</h2>
            <h2>yang sesuai dengan Passionmu</h2>
            <h2>"MagangHunters"</h2>
        </div>
    </div>

    <div class="search-bar">
        <div class="search-wrap">
            <input type="text" class="input-bar" placeholder="cari magang">
            <button class="custom-btn">Cari Lowongan</button>
        </div>
    </div>

    <!-- CardLowongan -->
    <!-- Belum selesai lanjut sini mas -->
    <div class="container-fluid d-flex gap-4 flex-wrap card-wrap" id="card">
        <?php foreach ($data['jobs'] as $mydata) : ?>
            <a href="<?= BASEURLJOBS; ?>/home/detail/<?= $mydata['JobID']; ?>">
                <div class="custom-card">
                    <img src="<?= BASEURL; ?>/assets/image/icon.jpg" alt="" class="jobicon">
                    <div class="card-text">
                        <h1><?= $mydata['Title']; ?></h1>
                        <h2><?= $mydata['Description']; ?></h2>
                        <h3><?= $mydata['CompanyName'];?></h3>
                        <p>5 bulan</p>
                        <h4>Bersertifikat</h4>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="footer-wrap container-fluid">
        <div class="footer container">
            <div class="">
                <a href="">

                    <h2>Magang</h2>
                    <h2>Hunters</h2>
                </a>
            </div>
            <div class="">
                <a href="">

                    <p>Hire Talent</p>
                    <p>MagangHunters</p>
                </a>
            </div>
            <div class="">

                <a href="">Job Listings</a>
            </div>
            <div class="">
                <a href="">Internship</a>
            </div>
            <div class="">
                <a href="">Support</a>
            </div>
        </div>
    </div>
</section>