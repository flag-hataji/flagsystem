<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $bcBaser->xmlHeader() ?>
<?php $bcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<?php $bcBaser->charset() ?>
<?php $bcBaser->title() ?>
<?php $bcBaser->metaDescription() ?>
<?php $bcBaser->metaKeywords() ?>
<?php $bcBaser->icon() ?>
<?php $bcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
<?php $bcBaser->css('style') ?>
<?php if($bcBaser->isTop()): ?>
    <?php $bcBaser->css('style1') ?>
    <?php $bcBaser->css('bxslider') ?>
<?php endif; ?>
<?php $bcBaser->css(array('layout')) ?>
<?php $bcBaser->js(array(
	'jquery-1.4.4.min',
	'jquery.easing',
	'jquery.colorbox-min',
	'script',
	'rollover',
	'jquery.bxSlider',
	'startup')) ?>
<?php $bcBaser->scripts() ?>
<?php $bcBaser->element('google_analytics') ?>
</head>
<?php $bcBaser->func() ?>
<body id="<?php echo $bcBaser->getContentsName(true) ?>">
<?php $bcBaser->element('header') ?>

    <div id="Page">
        <?php if($bcBaser->isTop()): ?>
            <?php $bcBaser->element('toppage') ?>
        <?php endif; ?>

        <div id="Wrap" class="clearfix">


            <?php if(!$bcBaser->isTop()): ?>
                <div id="Alfa">
                    <div style="padding-left:5px;">
                    <?php $bcBaser->content() ?>
                    </div>
                </div>
            <?php else: ?>
                        <?php $bcBaser->flash() ?>
                        <?php $bcBaser->content() ?>
                    <?php $bcBaser->element('contents_navi') ?>
            <?php endif; ?>
            <div class="to-top"> <a href="#Page">このページの先頭へ戻る</a> </div>



            <?php if(!$bcBaser->isTop()): ?>
            <div id="Beta"><!-- SideBar -->
                <div id="SideBar">
                    <?php $bcBaser->element('sidebox') ?>
                    <div class="link">
                    <?php $bcBaser->element('widget_area',array('no'=>$widgetArea)) ?>
                    </div>
                </div>
            </div><!-- end SideBar -->
            <?php endif; ?>

        </div><!-- end Wrap -->
     </div><!-- end page-->

    <?php $bcBaser->element('footer') ?>
    <?php echo $cakeDebug; ?>
</body>
</html>