<?php foreach($posts as $post) : ?>

    <h1><?= $post->title; ?></h1>
    <p><?= $post->body; ?></p>
    
    <div>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
    </div>

<?php endforeach; ?>