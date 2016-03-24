<?php

return [

    'theme' => [

        'folder' => 'themes',
        'active' => 'default'

    ],

    'templates' => [

        'home' => Cms\Templates\HomeTemplate::class,
        'blog' => Cms\Templates\BlogTemplate::class,
        'blog.post' => Cms\Templates\BlogPostTemplate::class,

    ]

];
