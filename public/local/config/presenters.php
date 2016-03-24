<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Presenters
    |--------------------------------------------------------------------------
    |
    | Define your objects and their corrosponding presenters here to have them
    | automatically decorated when resolved in a view. The array key should
    | be your object and the value will be the presenter. Remember to use
    | the class names and not actual instances.
    |
    */

    Cms\Page::class => Cms\Presenters\PagePresenter::class,
    Cms\Post::class => Cms\Presenters\PostPresenter::class,
    Cms\User::class => Cms\Presenters\UserPresenter::class,

];
