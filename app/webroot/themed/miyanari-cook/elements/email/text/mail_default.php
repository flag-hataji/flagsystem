<?php
/* SVN FILE: $Id$ */
/**
 * [EMAIL] メール送信
 * 
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2012, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2012, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			baser.plugins.mail.views
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
?>

                                           <?php echo $other['date'] ?> 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　　　　　　　　◆◇　講演会仮申し込みを受付けました　◇◆ 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

<?php if($other['mode']=='user'): ?>
　この度は、講演会仮申し込みいただきありがとうございます。 
　送信内容は下記のようになっております。  
<?php elseif($other['mode']=='admin'): ?>
　<?php echo $mailConfig['site_name'] ?> への講演会仮申し込みを受け付けました。
　受信内容は下記のとおりです。   
<?php endif; ?>

━━━━◇◆━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　◆ 講演会仮申し込み内容 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━◆◇━━━━
<?php echo $this->element('email/text/mail_data') ?>
 
 
 
───────────────────────────────────

<?php if($other['mode']=='user'): ?>
　なお、このメールは自動返信メールとなっております。 
　メールを確認させて頂き次第、早急にご連絡させていただきます。 
　恐れ入りますがしばらくお待ちください。 
<?php elseif($other['mode']=='admin'): ?>
　なお、このメールは自動転送システムです。 
　受け付けた旨のメールもユーザーへ送られています。 
<?php endif; ?>
 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

　<?php echo $mailConfig['site_name'] ?>
 
　<?php echo $mailConfig['site_url'] ?>　<?php echo $mailConfig['site_email'] ?>
<?php if($mailConfig['site_tel']): ?>

　TEL　<?php echo $mailConfig['site_tel'] ?><?php endif; ?>
<?php if($mailConfig['site_fax']): ?>
　FAX　<?php echo $mailConfig['site_fax'] ?>

<?php endif; ?>
 
 
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━