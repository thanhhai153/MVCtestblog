<div class="post-preview">
    <?php
    $posts = $data["Baiviet"];
    foreach ($posts as $post) {
        $id = $post["id"];
        $title = $post["title"];
        $posts = $post["posts"];
    ?>
        <a href="home/dividualpost/<?= $id ?>">
            <h3 class="post-title"><?= $title ?></h3>
            <div class="post-content"><?= $posts ?></div>
            <br>
            <p class="post-meta">
                Posted by
                <a href="#!">Ahihi</a>
                on September 24, 2023
            </p>
        </a>
    <?php

    }
    ?>
    <!-- Pager-->
    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!=">Older Posts →</a></div>
</div>