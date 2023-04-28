<form action="actions\addposts.php" method="post">
    <h3>Chỉnh sửa bài viết</h3>
    <div class="form-outline mb-4">
        <h3>Tiêu đề</h3>
        <input type="text" name="title" placeholder="title" class="form-control">
    </div>
    <div class="form-outline mb-4">
        <h3>Bài viết</h3>
        <textarea name="posts" class="ckeditor"></textarea>
    </div>
    <input type="submit" name="updateposts" value="update">
</form>