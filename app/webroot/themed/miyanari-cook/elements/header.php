<div class="hline">
    <div id="Header">
        <div id="HeaderTitle"><?php $bcBaser->link($bcBaser->getImg('header_top_logo.png',array('title'=>'宮成なみオフィシャルサイト','alt'=>'宮成なみオフィシャルサイト')),'/') ?></div>
        <div id="HeaderH1"><h1>食と命の大切さ。正しい手抜きレシピ。料理研究家 宮成なみ 公式サイト</h1></div>
    <?php $bcBaser->element('search') ?>
    </div>
</div>


<?php $bcBaser->element('global_menu') ?>

	<?php if(!$bcBaser->isTop()): ?>
	<div id="Navigation">
		<?php $bcBaser->element('navi',array('title_for_element'=>$bcBaser->getContentsTitle())); ?>
	</div>
	<?php endif ?>
<?php if($bcBaser->isTop()): ?>
<div class="MainSliderBack">
<?php endif; ?>