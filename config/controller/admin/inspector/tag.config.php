<?php

$config = array(
	'query' => array(
		'model' => 'NoviusDev\BlogNews\News\Model_Tag',
		'order_by' => 'tag_label',
	),
);

$base = \Config::load('noviusdev_blognews::controller/admin/inspector/tag', true);
return array_merge($base, $config);