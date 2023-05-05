<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Home';
require_once "components/meta.php";
?>

<body>
    <!-- Navigation + Page Header-->
    <?php
    include_once 'components/header.php';
    // <!-- message -->
    require_once "components/message.php";
    ?>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <?php require_once "pages/" . $data["Page"] . ".php" ?>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <?php
    include_once 'components/footer.php';
    include_once 'components/script.php';
    ?>
</body>
</html>