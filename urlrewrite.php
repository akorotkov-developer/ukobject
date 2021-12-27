<?php
$arUrlRewrite=array (
  21 => 
  array (
    'CONDITION' => '#^/video/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1&videoconf',
    'ID' => 'bitrix:im.router',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  19 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/personal/announcements/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/personal/announcements/index.php',
    'SORT' => 100,
  ),
  32 => 
  array (
    'CONDITION' => '#^/questions-and-answers/#',
    'RULE' => '',
    'ID' => 'bitrix:support.faq',
    'PATH' => '/questions-and-answers/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/personal/support/#',
    'RULE' => '',
    'ID' => 'citrus:support.ticket',
    'PATH' => '/personal/support/index.php',
    'SORT' => 100,
  ),
  26 => 
  array (
    'CONDITION' => '#^/interview/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/interview/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/workplace/#',
    'RULE' => '',
    'ID' => 'citrus:support.ticket',
    'PATH' => '/workplace/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/documents/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/documents/index.php',
    'SORT' => 100,
  ),
  34 => 
  array (
    'CONDITION' => '#^/service/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/service/index.php',
    'SORT' => 100,
  ),
  35 => 
  array (
    'CONDITION' => '#^/objects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/objects/index.php',
    'SORT' => 100,
  ),
  27 => 
  array (
    'CONDITION' => '#^/events/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/events/index.php',
    'SORT' => 100,
  ),
  23 => 
  array (
    'CONDITION' => '#^/video/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/video/index.php',
    'SORT' => 100,
  ),
  31 => 
  array (
    'CONDITION' => '#^/forum/#',
    'RULE' => '',
    'ID' => 'bitrix:forum',
    'PATH' => '/forum/index.php',
    'SORT' => 100,
  ),
  18 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  30 => 
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/news/index.php',
    'SORT' => 100,
  ),
  33 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
);
