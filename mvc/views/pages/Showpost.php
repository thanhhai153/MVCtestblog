<div class="post-preview">
    <?php
    // require_once './vendor/autoload.php';

    use Test\Blog\Blogs;

    // $blog = new Posts();
    // $post = $blog->getPostById($id);
    echo 'aihihi';
    // var_dump($post);
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

    <!-- <h3 class="post-title"><?= $post['title'] ?></h3>
    <div class="post-subtitle"><?= $post['posts'] ?></div> -->

</div>