<?= view('header') ?>

<div class="container my-5">
    <div class="row align-items-center">
        
        <div class="col-md-4 text-center mb-4 mb-md-0">
           <img src="<?= base_url('gambar/sain.jpg') ?>" class="img-fluid rounded shadow-sm" alt="Science Fiction Film" style="width: 100%; max-width: 300px; height: 200px; object-fit: cover;" /> 
        </div>
        
        
        <div class="col-md-8">
            <h2 class="mb-3">Science Fiction Film</h2>
            <p class="text-muted" style="text-align: justify; line-height: 1.6;">
                Science fiction (or sci-fi) is a film genre that uses speculative, fictional science-based depictions of phenomena that are not fully accepted by mainstream science, such as extraterrestrial lifeforms, spacecraft, robots, cyborgs, interstellar travel, time travel, or other futuristic technologies. Science fiction films have often been used to focus on political or social issues, and to explore philosophical issues such as the human condition.
            </p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <p class="text-muted" style="text-align: justify; line-height: 1.6;">
                The genre has roots in early silent cinema, most notably Georges Méliès' 1902 masterpiece *A Trip to the Moon*, and Fritz Lang's *Metropolis* in 1927. Throughout the 20th and 21st centuries, science fiction expanded from B-movies into massive blockbuster franchises like *Star Wars*, *Star Trek*, and *Matrix*. By blending imagination with scientific concepts or futuristic speculations, sci-fi continues to challenge our perception of reality, technology, and the future of humanity.
            </p>
        </div>
    </div>

    
    <div class="mt-4">
        <a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">&larr; Kembali ke Home</a>
    </div>
</div>

<?= view('footer') ?>