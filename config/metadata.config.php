<?php
return array(
    'name'    => 'News stories',
    'version' => '0.1',
    'icon16'  => 'static/apps/noviusos_news/img/news-16.png',
    'icon64'  => 'static/apps/noviusos_news/img/news-64.png',
    'provider' => array(
        'name' => 'Novius OS',
    ),
    'namespace' => 'Nos\BlogNews\News',
    'permission' => array(

    ),
    'launchers' => array(
        'noviusos_news' => array(
            'name'    => 'News stories',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/noviusos_news/appdesk',
                ),
            ),
        ),
    ),
    'enhancers' => array(
        'home_news' => array(
            'title' => 'Home news stories',
            'desc'  => '',
            'enhancer' => 'noviusos_news/front/home',
            'previewUrl' => 'admin/noviusos_news/application/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusos_news/application/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
        'noviusos_news' => array(
            'title' => 'News stories',
            'desc'  => '',
            'urlEnhancer' => 'noviusos_news/front/main',
            'previewUrl' => 'admin/noviusos_news/application/preview',
            'dialog' => array(
                'contentUrl' => 'admin/noviusos_news/application/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
    ),
    'icons' => array(
        64 => 'static/apps/noviusos_news/img/news-64.png',
        32 => 'static/apps/noviusos_news/img/news-32.png',
        16 => 'static/apps/noviusos_news/img/news-16.png',
    ),
);
