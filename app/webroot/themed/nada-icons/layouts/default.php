<?php
/**
 * デフォルトレイアウト
 */
?>
<?php
// 簡易認証：（メンバーページログイン）
$text = $_SERVER['REQUEST_URI'];
//
$pat = '/member/';
if(preg_match($pat,$text)){
    if(!isset($this->viewVars['user']) && $this->viewVars['user']['name']!="user"){
        //userid 10 ログインユーザー
        header("Location: /users/login");
    }
}

//既にログインしている場合、ログインURLにアクセスされたらリダイレクト
//    if(isset($this->viewVars['user'])){
//        $loginUrl = "/member";
//    }else{
//        $loginUrl = "/users/login";
//    }
?>


<?php $bcBaser->xmlHeader() ?>
<?php $bcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<?php $bcBaser->charset() ?>
<?php $bcBaser->title() ?>
<?php $bcBaser->metaDescription() ?>
<?php $bcBaser->metaKeywords() ?>
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="528016170583042"/>
<meta property="og:site_name" content="1050円からのメルマガ配信。フラッグシステム" />
<meta property="og:title" content="メルマガ配信は1050円〜。フラッグシステム" />
<meta property="og:description" content="メルマガ配信は1050円〜。メルマガ配信,メール配信のフラッグシステム" />
<?php $bcBaser->icon() ?>
<?php $bcBaser->rss('ニュースリリース RSS 2.0', '/news/index.rss') ?>
<?php $bcBaser->css('style') ?>
    
<?php $bcBaser->js(array(
    'jquery-1.7.2.min',
    'functions',
    'startup',
    'jquery.bxSlider.min',
    'jquery.easing.1.3',
    'nada-icons'
)) ?>
<?php $bcBaser->scripts() ?>
<?php $bcBaser->element('google_analytics') ?>
</head>
<body id="<?php $bcBaser->contentsName() ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=528016170583042";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php $bcBaser->header() ?>

<div id="Page">
    <div id="Wrap" class="clearfix">
    

        <?php $bcBaser->element('sidebox') ?>

        <div id="Beta">
            <?php if(!$bcBaser->isTop()): ?>
            <div id="Navigation">
                <?php $bcBaser->element('crumbs'); ?>
            </div>
            <?php endif ?>

            <?php if($bcBaser->isTop()): ?>
            <div id="top-main">
                <?php $bcBaser->img('./slider/flag_top.png'); ?>
<!--
                <div id="slider">
                  <div><?php $bcBaser->img('./slider/01.png'); ?></div>
                </div>
-->
            </div>
            <?php 
            /*
            *スライダーは色々設定ができるので参考にして下さい  http://zxcvbnmnbvcxz.com/demonstration/bxslide.html 
            *設定ファイルは js/nada-icons です
            */
            ?>
            <?php endif ?>

            <div id="ContentsBody" class="clearfix">
                <?php if($bcBaser->isHome()): ?>
                <?php $bcBaser->element('toppage') ?>
                <?php else: ?>
                <div id="ContentsBody" class="subpage">
                    <?php $bcBaser->flash() ?>
                    <?php $bcBaser->content() ?>
                    <?php $bcBaser->element('contents_navi') ?>
                    <div class="to-top"> <a href="#Page"><?php $bcBaser->img('./icons_up.png'); ?>ページトップへ戻る</a></div>
                </div>
                <?php endif ?>

            <?php if($bcBaser->isTop()): ?>
                <div id="top-contents-main">
                <div class="fb-like-box" data-href="https://www.facebook.com/flagsystem" data-width="730" data-show-faces="true" data-stream="false" data-show-border="true" data-header="false"></div>
                </div>
            <?php endif ?>

            </div>
        </div><!--Bata-->

    </div><!--Wrap-->

    
    
</div><!--Page-->
<?php $bcBaser->footer() ?>
<?php $bcBaser->func() ?>
</body>
</html>