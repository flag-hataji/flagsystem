<div id="TopPage" class="cleafix">
    <div id="TopPageMainImg">
            <?php $bcBaser->img('main_b.png',array('url' => '/prof','alt'=>'宮成なみ プロフィール','id'=>'TopPageMainImgBtn')); ?>
    </div>
    <div id ="TopNews">
        <div id="TopNewsTitle">
            <a href="news" >&gt;&gt;もっと見る</a>
        </div>
        <div id="TopNewsTitle_List">
            <?php $bcBaser->blogPosts('news', 4) ?>
        </div>
        <?php $bcBaser->img('top_merumaga.png',array('url' => '/merumaga','alt'=>'メルマガ登録')); ?>
    </div>
</div>
<div id="TopIcons"class="cleafix">
        <ul>
            <li ><?php $bcBaser->img('icon_01.png',array('url' => '/miyanarinami/archives/category/hakkou_love','alt'=>'発酵ラブ')); ?></li>
            <li ><?php $bcBaser->img('icon_02.png',array('url' => '/miyanarinami/archives/category/kurashi','alt'=>'暮らし上手')); ?></li>
            <li ><?php $bcBaser->img('icon_03.png',array('url' => '/miyanarinami/archives/category/gohan','alt'=>'今日のご飯')); ?></li>
            <li ><?php $bcBaser->img('icon_04.png',array('url' => '/miyanarinami/archives/category/recipe','alt'=>'なみレシピ')); ?></li>
            <li ><?php $bcBaser->img('icon_05.png',array('url' => '/miyanarinami/archives/category/chiebukuro','alt'=>'台所知恵袋')); ?></li>
            <li ><?php $bcBaser->img('icon_06.png',array('url' => '/miyanarinami/archives/category/syoku-ohanashi','alt'=>'食のお話')); ?></li>
            <li ><?php $bcBaser->img('icon_07.png',array('url' => '/media/index','alt'=>'メディア情報')); ?></li>
            <li ><?php $bcBaser->img('icon_08.png',array('url' => 'https://www.facebook.com/nami.miyanari?fref=ts','alt'=>'Facebook','target'=>'_blank')); ?></li>
            <li ><?php $bcBaser->img('icon_09.png',array('url' => '/#','alt'=>'メロメロレシピ')); ?></li>
            <li ><?php $bcBaser->img('icon_10.png',array('url' => '/#','alt'=>'奇跡のご飯')); ?></li>
        </ul>
</div>
<div id="TopSchedule"class="cleafix">
    <div id ="TopScheduleLeft">
        <div id="TopScheduleTitle">
            <a href="/event/index" >&gt;&gt;もっと見る</a>
        </div>
        <div id="TopSchedule_List">
            <?php $bcBaser->blogPosts('news', 4) ?>
        </div>
    </div>
    <div id ="TopMessage">
            <?php $bcBaser->img('top_message.png',array('url' => '/merumaga','alt'=>'メルマガ登録')); ?>
    </div>
    <div id ="TopMessage2">
            <?php $bcBaser->img('top_irai.png',array('url' => '/irai','alt'=>'お仕事依頼','id'=>'TopMessage2Irai')); ?>
            <?php $bcBaser->img('top_naruniha.png',array('url' => '/naruniha','alt'=>'料理研究家になるには','id'=>'TopMessage2Naruniha')); ?>
    </div>
</div>
<div id="TopJob"class="cleafix">
            <?php $bcBaser->img('top_irai_tit_01.png',array('url' => '/irai#recipe','alt'=>'レシピ作成','id'=>'irai01')); ?>
            <?php $bcBaser->img('top_irai_tit_02.png',array('url' => '/irai#syuzai','alt'=>'取材、執筆依頼','id'=>'irai02')); ?>
            <?php $bcBaser->img('top_irai_tit_03.png',array('url' => '/irai#kouen','alt'=>'講演依頼','id'=>'irai03')); ?>
            <?php $bcBaser->img('top_irai_tit_04.png',array('url' => '/irai#event','alt'=>'イベント、出演依頼','id'=>'irai04')); ?>
            <?php $bcBaser->img('top_irai_syosai.png',array('url' => '/irai#recipe','alt'=>'レシピ作成、詳細はこちら','id'=>'irai_shosai01')); ?>
            <?php $bcBaser->img('top_irai_syosai.png',array('url' => '/irai#syuzai','alt'=>'取材、執筆依頼、詳細はこちら','id'=>'irai_shosai02')); ?>
            <?php $bcBaser->img('top_irai_syosai.png',array('url' => '/irai#kouen','alt'=>'講演依頼、詳細はこちら','id'=>'irai_shosai03')); ?>
            <?php $bcBaser->img('top_irai_syosai.png',array('url' => '/irai#event','alt'=>'イベント、出演依頼、詳細はこちら','id'=>'irai_shosai04')); ?>
</div>
