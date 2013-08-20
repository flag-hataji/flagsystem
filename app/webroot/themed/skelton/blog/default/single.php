<?php
/**
 * ブログ詳細ページ
 */
$bcBaser->css('colorbox/colorbox', array('inline' => true));
$bcBaser->js('jquery.colorbox-min', false);
$bcBaser->setDescription($blog->getTitle().'｜'.$blog->getPostContent($post,false,false,50));
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<h2 class="contents-head">
	<?php $blog->title() ?>
</h2>
<h3 class="contents-head">
	<?php $bcBaser->contentsTitle() ?>
</h3>
<div class="post">
	<?php $blog->postContent($post) ?>
	<div class="meta"> <span>
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->postDate($post) ?>
		&nbsp;
		<?php $blog->author($post) ?>
		</span> </div>
	<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
</div>
<div id="contentsNavi">
	<?php $blog->prevLink($post) ?>
	&nbsp;｜&nbsp;
	<?php $blog->nextLink($post) ?>
</div>
<?php $bcBaser->element('blog_comments') ?>