<div class="post-preview">
    <?php
    $posts = $data["Baiviet"];
    foreach ($posts as $post) {
        $id = $post["id"];
        $title = $post["title"];
        $posts = $post["posts"];

    ?>
        <a href="/home/dividualpost/<?= $id ?>">
            <h3 class="post-title"><?= $title ?></h3>
            <div class="post-subtitle"><?= $posts ?></div>
            <p class="post-meta">
                Posted by
                <a href="#!">Ahihi</a>
                on September 24, 2023
            </p>
        </a>
    <?php

    }
    ?>

    <!-- <h3 class="post-title"><?= $post['title'] ?></h3>
    <div class="post-subtitle"><?= $post['posts'] ?></div> -->

</div>