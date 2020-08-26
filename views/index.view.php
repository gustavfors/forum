<?php foreach($posts as $post) : ?>

    <h1><?= $post->title; ?></h1>
    <p><?= $post->body; ?></p>
    
    

<?php endforeach; ?>

<div>
    <?php for ($i = 1; $i <= $pages; $i++) : ?>
        <a href="/?page=<?= $i; ?>"><?= $i; ?></a>
    <?php endfor; ?>
</div>