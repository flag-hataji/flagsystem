<div id="Newsback" >
<?php foreach($posts as $post): ?>
<div id="top-news-links">
    <div class="top-news-new">
        <?php $bcBaser->img("new_icon.png") ?>
    </div>
    <div class="top-news-txt">
    <p>
        <span><?php $blog->postDate($post,"Y/m/d") ?></span>
    </p>
    <p>
        <span><?php $blog->postTitle($post) ?></span>
    </p>
    </div>
</div>
<?php endforeach; ?>
</div>