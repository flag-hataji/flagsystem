<div id="SideBox"class="clearfix">
    <div class="SideMenuTop">
        <?php $bcBaser->link($bcBaser->getImg('sidebox/right_logo.png',array('title'=>'宮成なみ公式WEBサイト','alt'=>'宮成なみ公式WEBサイト')),'/') ;?>
        <?php $bcBaser->link($bcBaser->getImg('sidebox/right_nami.png',array('title'=>'宮成なみプロフィール','alt'=>'宮成なみプロフィール')),'/prof') ;?>
        <div id="GlobalMenus" class="Left-GlobalMenus">
            <?php $bcBaser->element('side_global_menu') ?>
        </div>
    </div>

    <div class="SideMenuBottom ">
        <?php $bcBaser->link($bcBaser->getImg('sidebox/right_mail.png',array('title'=>'メルマガ登録','alt'=>'メルマガ登録')),'/merumaga') ;?>

        <?php $bcBaser->link($bcBaser->getImg('sidebox/right_message.png',array('title'=>'たくさんのメッセージを頂いています','alt'=>'たくさんのメッセージを頂いています')),'/contact#voice') ;?>
        <div id="SideMenuIconS" class="clearfix">
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
        <div class="SideTitle ">宮成なみの本</div>
        <div id="SideBooks">
            <ul>
                <li><?php $bcBaser->img('sidebox/right_book_01.png',array('url' => '/#','alt'=>'メロメロレシピ')); ?></li>
                <li><?php $bcBaser->img('sidebox/right_book_02.png',array('url' => '/#','alt'=>'奇跡のご飯')); ?></li>
            </ul>
        
        </div>

        <div class="SideTitle">イベントスケジュール</div>
        <div class="SideContents">出せれば。</div>
    </div>
</div>
