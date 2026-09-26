<?= view('header') ?>

<div class="container my-5">
    <h2 class="text-center mb-4">Kategori Film Populer</h2>
    
    
    <div class="row justify-content-center mb-4">
        <div class="col-md-5 mb-3">
            <div class="card shadow-sm text-center">
                <a href="<?= base_url('action') ?>">
                    <img src="<?= base_url('gambar/Action.jpg') ?>" class="card-img-top" alt="Action" style="height: 300px; object-fit: cover;">
                </a>
            </div>
        </div>

        <div class="col-md-5 mb-3">
            <div class="card shadow-sm text-center">
                <a href="<?= base_url('comedy') ?>">
                    <img src="<?= base_url('gambar/comedy.jpg') ?>" class="card-img-top" alt="Comedy" style="height: 300px; object-fit: cover;">
                </a>
            </div>
        </div>
    </div>

    
    <div class="row justify-content-center">
        <div class="col-md-5 mb-3">
            <div class="card shadow-sm text-center">
                <a href="<?= base_url('science_fiction') ?>">
                    <img src="<?= base_url('gambar/sain.jpg') ?>" class="card-img-top" alt="Science Fiction" style="height: 300px; object-fit: cover;">
                </a>
            </div>
        </div>

        <div class="col-md-5 mb-3">
            <div class="card shadow-sm text-center">
                <a href="<?= base_url('horror') ?>">
                    <img src="<?= base_url('gambar/horor.jpg') ?>" class="card-img-top" alt="Horror" style="height: 300px; object-fit: cover;">
                </a>
            </div>
        </div>
    </div>
</div>

<?= view('footer') ?>