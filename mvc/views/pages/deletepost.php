<form action="" method="post">
    <h3>Xóa sản bài viết</h3>
    <h3>Bài viết</h3>

    <input type="text" name="title" placeholder="title" class="form-control">
    <input type="submit" name="delposts" value="Xóa bài viết">
</form>
<div>
    <?php
    $posts = $data["Baiviet"];
    foreach ($posts as $post) {
        $id = $post["id"];
        $title = $post["title"];
        $posts = $post["posts"];
    ?>
        <a>
            <h3 class="post-title"><?= $title ?></h3>
            <p><?= $posts ?></p>
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
</div>