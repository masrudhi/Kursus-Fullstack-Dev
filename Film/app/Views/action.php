<?= view('header') ?>

<div class="container my-5">
    <div class="row align-items-center">
        
        <div class="col-md-4 text-center mb-4 mb-md-0">
            <img src="<?= base_url('gambar/Action.jpg') ?>" class="img-fluid rounded shadow-sm" alt="Action Film" style="width: 100%; max-width: 300px; height: 200px; object-fit: cover;" />
        </div>
        
        
        <div class="col-md-8">
            <h2 class="mb-3">Action Film</h2>
            <p class="text-muted" style="text-align: justify; line-height: 1.6;">
                Action film is a film genre that predominantly features chase sequences, fights, shootouts, explosions, and stunt work. The specifics of what constitutes an action film has been in scholarly debate since the 1980s. While some scholars such as David Bordwell suggested they were films that favor spectacle to storytelling, others such as Geoff King stated they allow the scenes of spectacle to be attuned to storytelling. Action films are often hybrid with other genres, mixing into various forms such as comedies, science fiction films, and horror films.
            </p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <p class="text-muted" style="text-align: justify; line-height: 1.6;">
                While the term "action film" or "action adventure film" has been used as early as the 1910s, the contemporary definition usually refers to a film that came with the arrival of New Hollywood and the rise of anti-heroes appearing in American films of the late 1960s and 1970s drawing from war films, crime films and Westerns. These genres were followed by what is referred to as the "classical period" in the 1980s. This was followed by the post-classical era where American action films were influenced by Hong Kong action cinema and the growing use of computer generated imagery in film. Following the September 11 attacks, a return to the early forms of the genre appeared in the wake of Kill Bill and The Expendables films.
            </p>
        </div>
    </div>

    
    <div class="mt-4">
        <a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">&larr; Kembali ke Home</a>
    </div>
</div>

<?= view('footer') ?>