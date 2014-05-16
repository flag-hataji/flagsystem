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

<div style="text-align:center;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- TextOnlyBorder -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9438013633852436"
     data-ad-slot="6153313994"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<h3 class="contents-head">
	<?php $bcBaser->contentsTitle() ?>
</h3>
<div class="post">
	<?php $blog->postContent($post) ?>
	<div class="meta"> 
	   <span class="date">
        <?php $blog->postDate($post) ?>
	   </span>
	   <span class="category">
		<?php $blog->category($post) ?>
		&nbsp;
		<?php $blog->author($post) ?>
		</span>
    </div>
	<?php $bcBaser->element('blog_tag', array('post' => $post)) ?>
</div>
<div id="contentsNavi">
	<?php $blog->prevLink($post) ?>
	&nbsp;  &nbsp;
	<?php $blog->nextLink($post) ?>
</div>

<div style ="margin-top: 20px;"class="fb-like" data-href="<?php print("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>" data-send="true" data-width="750" data-show-faces="true" data-font="arial"></div>
<div style ="margin-top: 5px;"class="fb-comments" data-href="<?php print("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);?>" data-width="750" data-num-posts="10"></div>

<div class="fb-like-box" data-href="https://www.facebook.com/flagsystem" data-width="750" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false"></div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<div style="text-align:center;margin-top:20px;">
<!-- TextOnlyBorder -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9438013633852436"
     data-ad-slot="6153313994"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<!-- X:S ZenBackWidget --><script type="text/javascript">document.write(unescape("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//flagsystem.co.jp&nsid=102168230797282016%3A%3A102571786192831049&rand="+Math.ceil((new Date()*1)*Math.random())+"' type='text/javascript'"+unescape("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->

<?php $bcBaser->element('blog_comments') ?>