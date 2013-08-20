<?php
/**
 * ブログトップ
 */
$bcBaser->css('colorbox/colorbox', array('inline' => true));
$bcBaser->js('jquery.colorbox-min', false);
$bcBaser->setDescription($blog->getDescription());
?>
<!-- blog title -->

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>
<h2 class="contents-head">
	<?php $blog->title() ?>
</h2>
<!-- blog description -->
<?php if($blog->descriptionExists()): ?>
<p class="blog-description">
	<?php $blog->description() ?>
</p>
<?php endif ?>

<?php if(!empty($posts)): ?>
<?php foreach($posts as $post): ?>
<div class="post">
        <div class="clear">
            <h4 class="contents-head">
                    <?php $blog->postTitle($post) ?>
            </h4>
            <div id="blogListImg">
                <?php echo $blog->getPostImg($post) ?>
            </div>
                <div id="blogListContent">
            <?php $blog->postContent($post,false,false,"300") ?>...
            <div style="text-align: right;padding: 5px 0;">
            <?php $blog->postLink($post,">>続きを読む"); ?></div>
            </div>
        </div>
	<div class="meta clear "> 
	   <span class="date">
        <?php $blog->postDate($post) ?>
	   </span>
	   <span class="category">
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->author($post) ?>
		</span> </div>
	<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
<!--Facebook-->
<?php
    $link =  $blog->getPostLink($post,"リンク");
    preg_match("|<a href=\"(.*?)\".*?>(.*?)</a>|mis",$link,$matches);
    $link_url = "http://" . $_SERVER["HTTP_HOST"].$matches[1];
?>
</div>
<?php endforeach; ?>
<?php else: ?>
<p class="no-data">記事がありません。</p>
<?php endif; ?>
<!-- pagination -->
<?php $bcBaser->pagination('simple'); ?>
