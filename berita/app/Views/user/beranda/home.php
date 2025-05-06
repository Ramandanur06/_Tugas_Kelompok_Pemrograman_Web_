<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php foreach ($berita as $b): ?>
                <div class="post-preview">
                    <a href="<?= session()->has('isLoggedIn') ? base_url('/berita/' . $b['slug']) : base_url('/login') ?>">
                        <h2 class="post-title"><?= esc($b['title']) ?></h2>
                    </a>
                    <p class="post-meta">
                        Diposting pada <?= date('d M Y', strtotime($b['created_at'])) ?>
                    </p>
                </div>
                <hr class="my-4" />
            <?php endforeach; ?>
        </div>
    </div>
</div>
