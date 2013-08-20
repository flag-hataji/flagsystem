<?php
Configure::write('Security.salt', 'O7DFjZJUifV2jfeCiCRVMKNHfB2Gej8ShCbDeLbA');
Configure::write('Cache.disable', false);
Configure::write('Session.save', 'cake');
Configure::write('BcEnv.siteUrl', 'www.flagsystem.co.jp/');
Configure::write('BcEnv.sslUrl', '');
Configure::write('BcApp.adminSsl', false);
Configure::write('BcApp.mobile', false);
Configure::write('BcApp.smartphone', false);
Cache::config('default', array('engine' => 'File'));
Configure::write('debug', 1);
Configure::write('App.baseUrl', '');
?>