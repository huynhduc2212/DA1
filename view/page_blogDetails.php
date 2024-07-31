<?php
extract($blogs_details);
?>

<main>
    <div class="container">
        <img class="img-blog" src="assets_user/img/<?= $img ?>" alt="">
        <p name="des" id="des"><?= $des ?></p>
    </div>
</main>

<style>
    .img-blog {
        width: 600px;
        height: 402px;
        margin-bottom: 10px;
    }
</style>