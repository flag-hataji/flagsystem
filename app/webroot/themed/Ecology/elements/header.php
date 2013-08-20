<div class="hline">
<div class="headback">
<div class="vrthead">
  <div>米砂亜環境株式会社は、あなたのご家庭へ環境に優しい暮らしをお届けいたします。</div>
  <div class="vrthead2"></div>
</div>
</div>
<div id="Header">

<?php $bcBaser->element('search') ?>

<div id="HeaderTitle">
<?php $bcBaser->link($bcBaser->getImg('logo.gif',array('title'=>'タイトルロゴ','alt'=>'タイトルロゴ','width'=>'300px','height'=>'40px')),'/') ?></div>
</div>

		<?php $bcBaser->element('global_menu') ?>

 	<?php if($bcBaser->isTop()): ?>
 	<?php else: ?>
 	 	<div class="mainback"></div>
 	<?php endif; ?>

	<?php if(!$bcBaser->isTop()): ?>
	<div id="Navigation">
		<?php $bcBaser->element('navi',array('title_for_element'=>$bcBaser->getContentsTitle())); ?>
	</div>
	<?php endif ?>
<?php if($bcBaser->isTop()): ?>
<div class="MainSliderBack">
<?php endif; ?>