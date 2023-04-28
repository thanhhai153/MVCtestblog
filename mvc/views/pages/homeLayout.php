<div class="post-preview">
    <?php
    // require_once './vendor/autoload.php';

    // use Test\Blog\Blogs;

    // $blog = new Blogs();
    $posts = $data["Baiviet"];
    // var_dump($posts); exit;
    foreach ($posts as $post) {
        // var_dump($posts); exit;

        $id = $post["id"];
        $title = $post["title"];
        $posts = $post["posts"];

    ?>
        <a href="post.php?id=<?= $id ?>">
            <h3 class="post-title"><?= $title ?></h3>
            <div class="post-content"><?= $posts ?></div>

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