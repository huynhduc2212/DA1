<?php
$html_blog = showBlogs($blogs);
?>

<main>
    <div class="tin-tuc-section">
        <div class="tin-tuc-container">
            <div class="tin-tuc-grid">
                <?= $html_blog; ?>
            </div>
        </div>
    </div>
</main>