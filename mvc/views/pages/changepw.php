<form action="./actions/updatepw.php" method="post">
    <!-- Old Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="password" class="form-control" />
        <label class="form-label" for="form2Example1">Password hiện tại</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="newpassword1" class="form-control" />
        <label class="form-label" for="form2Example2">Password mới</label>
    </div>
    <!-- Password input 2 -->
    <div class="form-outline mb-4">
        <input type="password" name="newpassword2" class="form-control" />
        <label class="form-label" for="form2Example2">nhập lại password mới</label>
    </div>

    <!-- Submit button -->
    <button type="submit" name="changepw" class="btn btn-primary btn-block mb-4">Đổi password</button>
    <button onclick="document.location='index.php'" class="btn btn-primary btn-block mb-4">Trở về trang chủ</button>
</form>