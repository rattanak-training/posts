<?php

namespace Rattanak\Posts;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rattanak\Posts\Posts
 */
class PostsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'posts';
    }
}
