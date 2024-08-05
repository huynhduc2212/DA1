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
        margin-bottom: 10px;
        max-width: 100%;
        object-fit: cover;
        height: auto;
    }
</style>