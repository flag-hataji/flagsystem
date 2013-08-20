<?php
/**
 * ブログ詳細ページ
 */
$bcBaser->css('colorbox/colorbox', null, null, false);
$bcBaser->js('jquery.colorbox-min', false);
$bcBaser->setDescription($blog->getTitle().'｜'.$blog->getPostContent($post,false,false,50));
$blog->editPost($post['BlogPost']['blog_content_id'],$post['BlogPost']['id']);
?>

<script type="text/javascript">
$(function(){
	if($("a[rel='colorbox']").colorbox) $("a[rel='colorbox']").colorbox({transition:"fade"});
});
</script>

<h2 class="contents-head" style="padding-bottom:20px;">
<?php $bcBaser->img('tb_news.png',array('alt'=>'新着情報','width'=>'712px','height'=>'40px')) ?></h2>
<h3 class="contents-head" style="padding-left:15px;">
	<?php $bcBaser->contentsTitle() ?>
</h3>
<div class="post">
	<?php $blog->postContent($post) ?>

	<!-- Facebook -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) {return;}
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=107955735962301";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<fb:like href="http://miyanari-cook.com/<?PHP echo $_SERVER['REQUEST_URI'] ?>" send="true" width="450" show_faces="false"></fb:like>
	<!-- Facebook END-->

	<div class="meta"> <span>
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->postDate($post,"Y年m月d日") ?>
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