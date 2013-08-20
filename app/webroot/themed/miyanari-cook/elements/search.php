<?php
if(!empty($this->passedArgs['num'])) {
$url = array('plugin' => null, 'controller' => 'contents', 'num' => $this->passedArgs['num']);
} else {
$url = array('plugin' => null, 'controller' => 'contents');
}
?>
<div class="search-box">
<?php echo $bcForm->create('Content', array('type' => 'get', 'action' => 'search', 'url' => $url)) ?>
<?php echo $bcForm->input('Content.c', array('type' => 'hidden')) ?>
<?php echo $bcForm->input('Content.q', array('id' => 'ContentQ',)) ?>
<?php echo $bcForm->submit('header_navi_search.png', array('div'=>false, 'id' => 'BtnSearch')) ?>
<?php echo $bcForm->end() ?>
</div>